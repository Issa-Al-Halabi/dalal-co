<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Mail\ContactUsMail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        Mail::to($request->email)->send(new ContactUsMail(
            $request->first_name,
            $request->last_name,
            $request->email,
            $request->phone,
            $request->subject,
            $request->message
        ));

        return redirect()->back()->with('message', "تم ارسال البيانات بنجاح");
    }
}