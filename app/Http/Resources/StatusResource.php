<?php

namespace App\Http\Resources;

use App\Enums\OrderStatusStatus;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\Status;
use Illuminate\Http\Resources\Json\JsonResource;

class StatusResource extends JsonResource
{

    public function toArray($request)
    {
        $actionMethod = $request->route()->getActionMethod();
        return match ($actionMethod) {
            'OrderTracking' => $this->OrderTrackingResource(),
        };
    }

    public function OrderTrackingResource()
    {
        return [
            'id'         => $this->id,
            'title'       => $this->title,
            'description' => $this->getOrderDesc($this, request()->id),
            'specifications'   => $this->specifications,
            'status'   => $this->getOrderStatus($this),
        ];
    }

    static public function getOrderDesc($status, $orderId)
    {
        $order_status = OrderStatus::where("order_id", $orderId)->where("status_id", $status->id)->get()->first();

        $maid_name = Order::find($orderId)->maid->fullName;
        $status->description = str_replace("(name)", $maid_name, $status->description);

        if (!$order_status) {
            $status->description = str_replace("input1", "", $status->description);
            $status->description = str_replace("input2", "", $status->description);

            return  $status->description;
        }
        $specifications = $order_status->specifications;


        if (isset($specifications["input1"])) {
            $status->description = str_replace("(input1)", $specifications["input1"], $status->description);
        }

        if (isset($specifications["input2"])) {
            $status->description = str_replace("(input2)", $specifications["input2"], $status->description);
        }
        return  $status->description;
    }

    public function getOrderStatus($status)
    {
        $order = Order::with("statuses")->find(request()->id);
        if (!$order->status_id) {
            return OrderStatusStatus::notcompleted;
        }
        $next_id = Status::where('id', '>', $order->status_id)->min('id');
        if ($status->id == $next_id) {
            return OrderStatusStatus::working;
        }
        $order_statuses = $order->statuses()->pluck("status_id")->toArray();
        if (in_array($status->id, $order_statuses)) {
            return OrderStatusStatus::completed;
        }
        return OrderStatusStatus::notcompleted;
    }
}
