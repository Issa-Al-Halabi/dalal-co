<?php

namespace App\Http\Resources;

use App\Models\Order;
use App\Models\OrderStatus;

class OrderStatusResource extends StatusResource
{

    public function toArray($request)
    {
        $actionMethod = $request->route()->getActionMethod();

        return match ($actionMethod) {
            'OrderTracking' => array_merge(parent::OrderTrackingResource($request), [

                'description' => parent::getOrderDesc(Order::class, OrderStatus::class, "order_id", $this, request()->id),
                'status'   => parent::getOrderStatus(Order::class, $this),

            ]),
        };
    }

    static  public function getOrderDescription($status, $renewalOfResidenceId)
    {
        return parent::getOrderDesc(Order::class, OrderStatus::class, "order_id", $status, $renewalOfResidenceId);
    }
}
