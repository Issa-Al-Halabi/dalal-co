<?php

namespace App\Http\Resources;

use App\Models\RenewalOfResidence;
use App\Models\ResidenceStatus;
use App\Models\Status;

class ResidenceStatusResource extends StatusResource
{

    public function toArray($request)
    {
        $actionMethod = $request->route()->getActionMethod();
        return match ($actionMethod) {
            'OrderTracking' => array_merge(parent::OrderTrackingResource($request), [
                'description' => parent::getOrderDesc(RenewalOfResidence::class, ResidenceStatus::class, "renewal_of_residence_id", $this, request()->id),
                'status'   => parent::getOrderStatus(RenewalOfResidence::class, $this),
            ]),
        };
    }

    static  public function getOrderDescription($status, $renewalOfResidenceId)
    {
        return parent::getOrderDesc(RenewalOfResidence::class, ResidenceStatus::class, "renewal_of_residence_id", $status, $renewalOfResidenceId);
    }
}
