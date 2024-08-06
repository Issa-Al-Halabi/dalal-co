<?php

namespace App\Http\Resources;

use App\Models\GiveInOrder;
use App\Models\GiveInStatus;

class GiveInStatusResource extends StatusResource
{

    public function toArray($request)
    {
        $actionMethod = $request->route()->getActionMethod();

        return match ($actionMethod) {
            'OrderTracking' => array_merge(parent::OrderTrackingResource($request), [

                'description' => parent::getOrderDesc(GiveInOrder::class, GiveInStatus::class, "give_in_order_id", $this, request()->id),
                'status'   => parent::getOrderStatus(GiveInOrder::class, $this),

            ]),
        };
    }

    static  public function getOrderDescription($status, $renewalOfResidenceId)
    {
        return parent::getOrderDesc(GiveInOrder::class, GiveInStatus::class, "give_in_order_id", $status, $renewalOfResidenceId);
    }
}
