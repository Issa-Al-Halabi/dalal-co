<?php

namespace App\Http\Controllers;

use App\Enums\OrderTypes;
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
use App\Models\Status;
use App\Models\User;
use Carbon\Carbon;

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


        // dd($orders);
        return view("front.orders", compact("orders"));
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

        // get the data
        $data['order'] = $model::findOrFail($request->id);
        $data['statuses'] = json_decode($this->resource(Status::where("order_type", OrderTypes::getValue($request->type))->get(), $resource)->toJson());

        return view('front.OrderTracking', $data);
    }
}
