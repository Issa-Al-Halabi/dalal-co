<?php

namespace App\Http\Controllers;

use App\Filament\Resources\ContactUsResource;
use App\Filament\Resources\OrderResource;
use App\Http\Requests\ContactUsRequest;
use App\Mail\ConfirmationMail;
use App\Mail\ContactUsMail;
use App\Mail\OrderMail;
use App\Models\ContactUs;
use App\Models\Maid;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Filament\Notifications\Notification;
use Filament\Notifications\Actions\Action;

class ContactUsController extends Controller
{

    public function getCsrfToken()
    {
        return csrf_token();
    }
    public function submitForm(ContactUsRequest $request)
    {
        $contactUs = new ContactUs();

        $contactUs->first_name = $request->first_name;
        $contactUs->last_name = $request->last_name;
        $contactUs->email = $request->email;
        $contactUs->phone = $request->phone;
        $contactUs->subject = $request->subject;
        $contactUs->message = $request->message;

        $contactUs->save();

        //       // send a message for me
        //    dispatch(new SendMailJob(new ContactUsMail($contactUs),env('MAIL_FROM_ADDRESS')));

        //    if ($request->email != null) {
        //        // send a message for the user
        //    dispatch(new SendMailJob(new ConfirmationMail(),$request->email));
        //    }

        // send a message for me
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactUsMail($contactUs));

        if ($request->email != null) {
            // send a message for the user
            Mail::to($request->email)->send(new ConfirmationMail());
        }

        $name = $request->first_name . " " . $request->last_name;
        Notification::make()
            ->title('التواصل بنا')
            ->success()
            ->body(' تم التواصل معك من قبل ' . $name)
            ->actions([
                Action::make('seeIt')
                    ->button()
                    ->url(ContactUsResource::getUrl('index'))
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

        return redirect(url("/") . "#contactSection")->with('message', "تم ارسال البيانات بنجاح");
    }

    public function sendOrderMail(ContactUsRequest $request)
    {
        try {
            $user = User::find($request->user_id);
            $maid = Maid::find($request->maid_id);

            $user_name = $user->name;
            $maid_full_name = $maid->first_name . " " . $maid->last_name;
            if (app()->getlocale() == "ar") {
                $maid_full_name = ($maid->getTranslations()['first_name']['ar'] ?? $maid->getTranslations()['first_name']['en']) . ' ' . ($maid->getTranslations()['last_name']['ar'] ?? $maid->getTranslations()['last_name']['en']);
            } else if (app()->getlocale() == "en") {
                $maid_full_name = ($maid->getTranslations()['first_name']['en'] ?? $maid->getTranslations()['first_name']['ar']) . ' ' . ($maid->getTranslations()['last_name']['en'] ?? $maid->getTranslations()['last_name']['ar']);
            }

            // // send a message for me
            // dispatch(new SendMailJob(new OrderMail(
            //     $user_name,
            //     $maid_full_name,
            // ), env('MAIL_FROM_ADDRESS')));

            // // send a message for the user
            // dispatch(new SendMailJob(new ConfirmationMail(true), $user->email));


            // send a message for me
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new OrderMail(
                $user_name,
                $maid_full_name,
            ));

            // send a message for the user
            Mail::to($user->email)->send(new ConfirmationMail(true));

            Notification::make()
                ->title('طلب خادمة جديد')
                ->success()
                ->body($maid_full_name . ' تم طلبها من قبل ' . $user_name)
                ->actions([
                    Action::make('makeOrder')
                        ->button()
                        ->url(OrderResource::getUrl('create'))
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

            return response()->json([
                "status" => "success",
                "message" => "تم ارسال طلبك بنجاح",
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "status" => "failed",
                "message" => "لم يتم ارسال الطلب",
            ]);
        }
    }
}