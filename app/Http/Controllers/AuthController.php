<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(AuthRequest $request)
    {
        $userdata = array(
            'email' => $request->email,
            'password' => $request->password
        );

        if (Auth::attempt($userdata)) {
            if ($request->query("trackOrder")) {
                return redirect()->route("Orders");
            } elseif ($request->query("MCQOrder")) {
                return redirect()->route("mcq");
            } elseif ($request->query("servicesCheck")) {
                return redirect()->route("services");
            }

            return redirect("/");
        }
        return redirect()->back()->withInput();
    }

    public function signup(AuthRequest $request)
    {
        $user = User::create([
            'name' =>  $request->name,
            "password" =>  $request->password,
            'email' =>  $request->email,
            'phone' =>  $request->phone,
        ]);

        $userdata = array(
            'email' => $request->email,
            'password' => $request->password
        );

        if (Auth::attempt($userdata)) {
            if ($request->query("trackOrder")) {
                return redirect()->route("Orders");
            } elseif ($request->query("MCQOrder")) {
                return redirect()->route("mcq");
            } elseif ($request->query("servicesCheck")) {
                return redirect()->route("services");
            }
            return redirect("/");
        }
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect("/");
    }
}
