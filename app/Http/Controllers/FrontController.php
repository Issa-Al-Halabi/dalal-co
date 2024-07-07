<?php

namespace App\Http\Controllers;

use App\Helpers\PaginationHelper;
use App\Http\Resources\StatusResource;
use App\Models\Law;
use App\Models\Maid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Status;
use App\Models\User;
use Carbon\Carbon;

class FrontController extends Controller
{
    public function index()
    {
        return view("front.index");
    }

    public function services()
    {
        $maids = Maid::all()->load('order')->sortBy('order.maid_id');
        $maids = PaginationHelper::paginate($maids, 10, request()->page, ['path' => request()->url()]);

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

    public function lawDetail($id)
    {
        $law = Law::findOrfail($id);
        return view("front.lawDetail", compact("law"));
    }

    public function orders()
    {
        $id = auth()->user()->id;
        $orders = Order::where("user_id", $id)->get();
        return view("front.orders", compact("orders"));
    }

    public function OrderTracking(Request $request)
    {
        $user = User::with(['orders', 'orders.statuses'])->find(Auth::id());

        if (!$user) {
            abort(403);
        }

        $data['order'] = Order::findOrFail($request->id);

        $data['statuses'] = json_decode($this->resource(Status::where("order_type",  $data['order']->type)->get(), StatusResource::class)->toJson());

        return view('front.OrderTracking', $data);
    }
}
