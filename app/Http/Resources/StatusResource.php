<?php

namespace App\Http\Resources;

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
            'description' => $this->getOrderDesc($this),
            'specifications'   => $this->specifications,
            'status'   => $this->getOrderStatus($this),
        ];
    }

    public function getOrderDesc($status)
    {
        $order_status = OrderStatus::where("order_id", request()->id)->where("status_id", $status->id)->get()->first();

        if (!$order_status) {
            return  $status->description;
        }
        $specifications = $order_status->specifications;
        $maid_name = Order::find(request()->id)->maid->fullName;
        $status->description = str_replace("(name)", $maid_name, $status->description);

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
        $next_id = Status::where('id', '>', $order->status_id)->min('id');
        if ($status->id == $next_id) {
            return "working";
        }
        $order_statuses = $order->statuses()->pluck("status_id")->toArray();
        if (in_array($status->id, $order_statuses)) {
            return "completed";
        }
        return "not-completed";
    }
}
