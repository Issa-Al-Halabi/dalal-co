<?php

namespace App\Http\Controllers;

use App\Enums\OrderTypes;
use App\Enums\PhoneNumberEnums;
use App\Filament\Resources\ServiceOrderResource;
use App\Helpers\PaginationHelper;
use App\Http\Resources\DeportrationStatusResource;
use App\Http\Resources\GiveInStatusResource;
use App\Http\Resources\ResidenceStatusResource;
use App\Http\Resources\OrderStatusResource;
use App\Models\Deportration;
use App\Models\GiveInOrder;
use App\Models\Law;
use App\Models\Maid;
use App\Models\Nationality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\RenewalOfResidence;
use App\Models\Service;
use App\Models\ServiceOrder;
use App\Models\Status;
use App\Models\User;
use Carbon\Carbon;
use Filament\Notifications\Notification;
use Filament\Notifications\Actions\Action;

class FrontController extends Controller
{
    public function index()
    {
        return view("front.index");
    }

    public function maids($nationality_id)
    {
        // $nationality = Nationality::findorFail($nationality_id);

        $maids = Maid::where("nationality_id", $nationality_id)->get()->load('order')->sortBy('order.maid_id');
        $maids = PaginationHelper::paginate($maids, 10, request()->page, ['path' => request()->url()]);

        return view("front.Service", compact("maids"));
    }

    public function maidInfo(Maid $maid)
    {
        return view("front.MaidDetail", compact("maid"));
    }

    public function services()
    {
        if (! auth()->check()) {
            return redirect("/login?servicesCheck=1");
        }
        $services = Service::where("status", "1")->get();



        return view("front.services", compact("services"));
    }

    public function serviceSendWhatsapp($service_id)
    {
        $user = auth()->user();

        $serviceOrder = ServiceOrder::create([
            "user_id" => $user->id,
            "service_id" => $service_id,
        ]);

        $serviceTitle = Service::findOrfail($service_id)->title;

        $message = __('home.hi_dalalco') . "\n";
        $message .= __('home.my_name') . $user->name . "\n";
        $message .= __('home.my_email') . $user->email . "\n";
        $message .= __('home.my_phone') . $user->phone . "\n";
        $message .= __('home.i_want_to_order') . $serviceTitle . "\n";
        $message .= __('home.please_provide_me_with_details');

        $message = urlencode($message); // URL encode the entire message
        $message = str_replace('%0D%0A', '%0A', $message); // Adjust if \r\n is encoded, ensure it's only %0A for new lines

        $phone = PhoneNumberEnums::alia;

        $url = "https://wa.me/$phone?text=" . $message;

        Notification::make()
            ->title('طلب خدمة')
            ->success()
            ->body(' تم التواصل معك من قبل ' . $user->name)
            ->actions([
                Action::make('seeIt')
                    ->button()
                    ->url(ServiceOrderResource::getUrl('index'))
                    ->color('success')
                    ->close(),

                Action::make('markAsRead')
                    ->button()
                    ->markAsRead(),

                Action::make('remove')
                    ->button()
                    ->color('danger')
                    ->close(),
            ])
            ->sendToDatabase(User::doesHaveRole()->get());

        return redirect()->to($url);
    }
    public function laws()
    {
        $laws = Law::all();
        return view("front.Laws", compact("laws"));
    }

    public function lawDetail($id)
    {
        $law = Law::findOrfail($id);
        return view("front.lawDetail", compact("law"));
    }

    public function getCantTrackOrderMessage()
    {
        $user = auth()->user();
        $message = __('home.request tracking activation') . "\n";
        $message .= __('home.my_name') . $user->name . "\n";
        $message .= __('home.my_email') . $user->email . "\n";
        $message .= __('home.my_phone') . $user->phone . "\n";
        $message .= __('home.thanks');

        $message = urlencode($message); // URL encode the entire message
        $message = str_replace('%0D%0A', '%0A', $message); // Adjust if \r\n is encoded, ensure it's only %0A for new lines
        return $message;
    }

    public function orders()
    {
        $user = auth()->user();
        $id = $user->id;

        // Get all immediately, abroad Orders
        $immediatelyAndAbroadOrders = Order::where("user_id", $id)
            ->get()
            ->map(function ($order) {
                $order->type = OrderTypes::getName($order->type);
                return $order;
            });
        // dump($immediatelyAndAbroadOrders->toArray());

        // Get all Renewal Of Residence Orders
        $renewalOfResidenceOrders = RenewalOfResidence::where('user_id', $id)->get()
            ->map(function ($order) {
                $order->type = OrderTypes::getName(OrderTypes::renewalOfResidence);
                return $order;
            });

        // Get all Give In Orders
        $giveInOrders = GiveInOrder::where("old_owner_id", $id)
            ->orWhere("new_owner_id", $id)->get()
            ->map(function ($order) {
                $order->type = OrderTypes::getName(OrderTypes::giveIn);
                return $order;
            });

        // Get all Deportration Orders
        $deportrationOrders = Deportration::where('user_id', $id)->get()
            ->map(function ($order) {
                $order->type = OrderTypes::getName(OrderTypes::deportration);
                return $order;
            });

        // Merge All Orders
        $orders = $immediatelyAndAbroadOrders
            ->concat($renewalOfResidenceOrders)
            ->concat($giveInOrders)
            ->concat($deportrationOrders);

        // Sort
        $orders = $orders->sortByDesc('created_at');

        $message = $this->getCantTrackOrderMessage();

        $phone = PhoneNumberEnums::alia;
        return view("front.orders", compact("user", "phone", "message", "orders"));
    }

    public function OrderTracking(Request $request)
    {
        $user = User::with(['orders', 'orders.statuses'])->find(Auth::id());

        if (!$user) {
            abort(403);
        }

        // set the correct model and resource
        switch (OrderTypes::getValue($request->type)) {
            case OrderTypes::immediately:
            case OrderTypes::abroad:
                $model = Order::class;
                $resource = OrderStatusResource::class;
                break;

            case OrderTypes::renewalOfResidence:
                $model = RenewalOfResidence::class;
                $resource = ResidenceStatusResource::class;
                break;

            case OrderTypes::giveIn:
                $model = GiveInOrder::class;
                $resource = GiveInStatusResource::class;
                break;

            case OrderTypes::deportration:
                $model = Deportration::class;
                $resource = DeportrationStatusResource::class;
                break;

            default:
                abort(404);
                break;
        }

        $data["user"] = $user;

        // get the data
        $data['order'] = $model::findOrFail($request->id);
        $data['statuses'] = json_decode($this->resource(Status::where("order_type", OrderTypes::getValue($request->type))->get(), $resource)->toJson());


        $data["message"] = $this->getCantTrackOrderMessage();

        $data["phone"] = PhoneNumberEnums::alia;

        return view('front.OrderTracking', $data);
    }
}
