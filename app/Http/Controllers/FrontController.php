<?php

namespace App\Http\Controllers;

use App\Models\Law;
use App\Models\Maid;
use App\Models\Order;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view("front.index");
    }

    public function services()
    {
        $maids = Maid::doesntHave("order")->get();
        return view("front.Service", compact("maids"));
    }

    public function maidInfo(Maid $maid)
    {
        return view("front.MaidDetail", compact("maid"));
    }

    public function laws()
    {
        $laws = Law::all();
        return view("front.Laws", compact("laws"));
    }

    public function orders()
    {
        $id = auth()->user()->id;
        $orders = Order::where("user_id", $id)->get();
        return view("front.orders", compact("orders"));
    }
}
