<?php

namespace App\Http\Resources;

use App\Models\Deportration;
use App\Models\DeportrationStatus;

class DeportrationStatusResource extends StatusResource
{

    public function toArray($request)
    {
        $actionMethod = $request->route()->getActionMethod();

        return match ($actionMethod) {
            'OrderTracking' => array_merge(parent::OrderTrackingResource($request), [

                'description' => parent::getOrderDesc(Deportration::class, DeportrationStatus::class, "deportration_id", $this, request()->id),
                'status'   => parent::getOrderStatus(Deportration::class, $this),

            ]),
        };
    }

    static  public function getOrderDescription($status, $renewalOfResidenceId)
    {
        return parent::getOrderDesc(Deportration::class, DeportrationStatus::class, "deportration_id", $status, $renewalOfResidenceId);
    }
}
