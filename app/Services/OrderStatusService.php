<?php

namespace App\Services;

use App\Enums\OrderTypes;
use Filament\Forms\Components\Wizard\Step;
use App\Enums\StatusInputsTypes;
use App\Helpers\NotificationHelper;
use App\Http\Resources\DeportrationStatusResource;
use App\Http\Resources\GiveInStatusResource;
use App\Models\DeportrationStatus;
use App\Http\Resources\ResidenceStatusResource;
use App\Http\Resources\OrderStatusResource;
use App\Mail\OrderStateUpdateMail;
use App\Models\GiveInStatus;
use App\Models\OrderStatus;
use App\Models\ResidenceStatus;
use App\Models\Status;
use Filament\Forms\Components\Placeholder;
use Illuminate\Support\Facades\Mail;

class OrderStatusService
{

    public function getOrderStatusLabel($record, $type)
    {
        $statuses_count = $record->statuses()->count();

        if ($statuses_count == 0) {
            return 'حالة ابتدائية';
        } else if ($statuses_count == Status::where("order_type", $type)->count()) {
            return 'الطلب منتهي';
        }

        return "الخطوة " . $statuses_count;
    }

    public function isOrderCompleted($record, $type): bool
    {
        $statuses_count = $record->statuses()->count();

        if ($statuses_count == Status::where("order_type", $type)->count()) {
            return true;
        }

        return false;
    }

    public function getOrderStatusLabelColor($record, $type)
    {
        $statuses_count = $record->statuses()->count();

        if ($statuses_count == 0) {
            return 'warning';
        } else if ($statuses_count == Status::where("order_type", $type)->count()) {
            return 'success';
        }

        return "info";
    }

    public function getFormCurrentStep($record, $type)
    {
        $statuses_count = $record->statuses()->count();

        // If The statuses_count Is Equal To The Statuses Of The Same Type
        // That Means That The Order Is Completed
        if ($statuses_count == Status::where("order_type", $type)->count()) {
            return $statuses_count;
        }
        return $statuses_count + 1;
    }

    public function getTypeSteps($record, $type)
    {
        $statuses = Status::where("order_type", $type)
            ->take($record->statuses()->count() + 1)->get();

        $steps = [];
        $i = 1;

        foreach ($statuses as $status) {
            $steps[] = Step::make('status_' . $status->id)
                ->label("الخطوة " . $i)
                // When Pressing Next Step We Need To Update The Data
                ->afterValidation(function ($state) use ($record, $status) {
                    $this->getStepNextAction($state, $record, $status);
                })
                // Get This Step's Form
                ->schema($this->getStepForm($status->id));
            $i++;
        }

        return  $steps;
    }

    public function getStepForm($status_id)
    {
        $status =  Status::find($status_id);
        $inputs = [];

        $inputs[] = Placeholder::make('title_placeholder_' . $status_id)
            ->label("")
            ->content($status->title);
        // Loop Through The Specifications Of The Status To Generate The Input Based On Its (type,label)
        foreach (array_keys($status->specifications) as $specification_key) {
            $inputs[] = StatusInputsTypes::getInput($status->specifications[$specification_key], $specification_key, $status_id);
        }
        return  $inputs;
    }
    public function getOldData($record)
    {
        $statuses = $record->statuses;
        $old_data = [];
        foreach ($statuses as $status) {
            foreach (array_keys($status->specifications) as $specification_key) {
                $key = StatusInputsTypes::getInputName($status->status->specifications[$specification_key]["type"], $specification_key, $status->status->id);
                $old_data[$key] = $status->specifications[$specification_key];
            }
        }
        return $old_data;
    }
    public function getStepNextAction($state, $record, $status)
    {
        $specifications = [];
        foreach ($state as $key => $value) {
            // Get specificate_key and status_id From The Input Name
            // dump($key);
            [, $specificate_key, $status_id] = StatusInputsTypes::desolveInputName($key);

            // If The status_id Is Equal To The Current Step's staus->id Then We Need To Add It To Specifications
            if ($status_id == $status->id && $specificate_key != "placeholder") {
                $specifications[$specificate_key] = $value;
            }
        }
        // Replace The Old Data
        OrderStatus::where("status_id", $status->id)
            ->where("order_id", $record->id)
            ->update(
                [
                    'order_id' => $record->id,
                    'status_id' => $status->id,
                    'specifications' => $specifications,
                ]
            );
        // Send Notification To Notify The User That The Process Was Successfully Done
        NotificationHelper::sendFilamentNotification('تم تحديث البيانات');
    }

    public function getOrderFormAction($record, $state)
    {
        $record->statuses()->delete();
        $specifications = [];
        foreach ($state as $key => $value) {
            [, $specificate_key, $status_id] = explode("_", $key);
            $specifications[$status_id][$specificate_key] = $value;
        }

        foreach ($specifications as $statusId => $specification) {
            $status_specifications = [];

            foreach ($specification as $key => $value) {
                $status_specifications[$key] = $value;
            }

            OrderStatus::create([
                'order_id' => $record->id,
                'status_id' => $statusId,
                'specifications' => $status_specifications,
            ]);
        }
        // Update The Order's status_id
        $record->status_id = $statusId;
        $record->save();
        // Send Notification To Notify The User That The Process Was Successfully Done
        NotificationHelper::sendFilamentNotification('تم الإنتقال للخطوة التالية');

        $status = Status::findOrFail($statusId);

        $statusDesc = OrderStatusResource::getOrderDescription($status, $record->id);

        // send a message to the user
        if ($record->user->can_track ?? false) {
            Mail::to($record->user->email)->send(new OrderStateUpdateMail(
                $record->maid->fullName,
                $statusDesc,
                OrderTypes::getNameAr($record->type),
                route('OrderTrack', ['type' =>  OrderTypes::getName($record->type), 'id' => $record->id]),
            ));
        }
    }


    public function getResidenceFormAction($record, $state)
    {

        $record->statuses()->delete();
        $specifications = [];
        foreach ($state as $key => $value) {
            [, $specificate_key, $status_id] = explode("_", $key);
            $specifications[$status_id][$specificate_key] = $value;
        }

        foreach ($specifications as $statusId => $specification) {
            $status_specifications = [];

            foreach ($specification as $key => $value) {
                $status_specifications[$key] = $value;
            }

            ResidenceStatus::create([
                'renewal_of_residence_id' => $record->id,
                'status_id' => $statusId,
                'specifications' => $status_specifications,
            ]);
        }

        // Update The residence's status_id
        $record->status_id = $statusId;


        // to update maid residence expire date
        if ($this->isOrderCompleted($record, OrderTypes::renewalOfResidence)) {
            $residenceStatus = $record->statuses()->latest("id")->first();
            $record->maid->residence_expire_at = $residenceStatus->specifications["input2"];
            $record->maid->save();

            // set new residence date
            $record->new_residence_date = $residenceStatus->specifications["input2"];
        }
        $record->save();


        // Send Notification To Notify The User That The Process Was Successfully Done
        NotificationHelper::sendFilamentNotification('تم الإنتقال للخطوة التالية');

        // get the status
        $status = Status::findOrFail($statusId);

        $statusDesc = ResidenceStatusResource::getOrderDescription($status, $record->id);

        // send a message to the user
        if ($record->user->can_track ?? false) {
            Mail::to($record->maid->owner->email)->send(new OrderStateUpdateMail(
                $record->maid->fullName,
                $statusDesc,
                OrderTypes::getNameAr(OrderTypes::renewalOfResidence),
                route('OrderTrack', ['type' =>  OrderTypes::getName(OrderTypes::renewalOfResidence), 'id' => $record->id]),
            ));
        }
    }
    public function getGiveInFormAction($record, $state)
    {

        $record->statuses()->delete();
        $specifications = [];
        foreach ($state as $key => $value) {
            [, $specificate_key, $status_id] = explode("_", $key);
            $specifications[$status_id][$specificate_key] = $value;
        }

        foreach ($specifications as $statusId => $specification) {
            $status_specifications = [];

            foreach ($specification as $key => $value) {
                $status_specifications[$key] = $value;
            }

            GiveInStatus::create([
                'give_in_order_id' => $record->id,
                'status_id' => $statusId,
                'specifications' => $status_specifications,
            ]);
        }

        // Update The residence's status_id
        $record->status_id = $statusId;


        // to update maid Owner
        if ($this->isOrderCompleted($record, OrderTypes::giveIn)) {
            $record->maid->owner_id = $record->new_owner_id;
            $record->maid->save();
        }
        $record->save();


        // Send Notification To Notify The User That The Process Was Successfully Done
        NotificationHelper::sendFilamentNotification('تم الإنتقال للخطوة التالية');

        // get the status
        $status = Status::findOrFail($statusId);

        $statusDesc = GiveInStatusResource::getOrderDescription($status, $record->id);

        // send a message to the user
        if ($record->user->can_track ?? false) {
            Mail::to($record->maid->owner->email)->send(new OrderStateUpdateMail(
                $record->maid->fullName,
                $statusDesc,
                OrderTypes::getNameAr(OrderTypes::giveIn),
                route('OrderTrack', ['type' =>  OrderTypes::getName(OrderTypes::giveIn), 'id' => $record->id]),
            ));
        }
    }

    public function getDeportrationFormAction($record, $state)
    {
        $record->statuses()->delete();
        $specifications = [];
        foreach ($state as $key => $value) {
            [, $specificate_key, $status_id] = explode("_", $key);
            $specifications[$status_id][$specificate_key] = $value;
        }

        foreach ($specifications as $statusId => $specification) {
            $status_specifications = [];

            foreach ($specification as $key => $value) {
                $status_specifications[$key] = $value;
            }
            DeportrationStatus::create([
                'deportration_id' => $record->id,
                'status_id' => $statusId,
                'specifications' => $status_specifications,
            ]);
        }

        // Update The Order's status_id
        $record->status_id = $statusId;

        // Update deportration date
        if ($this->isOrderCompleted($record, OrderTypes::deportration)) {
            $deportrationStatus = $record->statuses()->latest("id")->first();

            // set new deportration date
            $record->deportration_date = $deportrationStatus->specifications["input1"];
        }

        $record->save();
        // Send Notification To Notify The User That The Process Was Successfully Done
        NotificationHelper::sendFilamentNotification('تم الإنتقال للخطوة التالية');

        $status = Status::findOrFail($statusId);
        $statusDesc = DeportrationStatusResource::getOrderDescription($status, $record->id);

        // send a message to the user
        if ($record->user->can_track ?? false) {
            Mail::to($record->maid->owner->email)->send(new OrderStateUpdateMail(
                $record->maid->fullName,
                $statusDesc,
                OrderTypes::getNameAr(OrderTypes::deportration),
                route('OrderTrack', ['type' =>  OrderTypes::getName(OrderTypes::deportration), 'id' => $record->id]),
            ));
        }
    }
}
