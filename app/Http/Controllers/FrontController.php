<?php

namespace App\Http\Controllers;

use App\Models\Law;
use App\Models\Maid;
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
        return view("front.Order", compact("maid"));
    }
    public function laws()
    {
        $laws = Law::all();
        return view("front.Laws", compact("laws"));
    }
}
