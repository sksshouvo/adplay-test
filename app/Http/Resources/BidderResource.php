<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BidderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "name" => $this->campaignname,
            "cookieMatchingUrl" => $this->url,
            "cookieMatchingNetworkId" => $this->appid,
            "cookieMatchingNetworkId" => $this->appid,
            "dealsBillingId" => $this->billing_id,
        ];
    }
}
