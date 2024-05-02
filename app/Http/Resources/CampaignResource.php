<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CampaignResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "campaignname" => $this->campaignname ?? NULL,
            "advertiser" => $this->advertiser ?? NULL,
            "code" => $this->code ?? NULL,
            "appid" => $this->appid ?? NULL,
            "tld" => $this->tld ?? NULL,
            "portalname" => $this->portalname ?? NULL,
            "creative_type" => $this->creative_type ?? NULL,
            "creative_id" => $this->creative_id ?? NULL,
            "day_capping" => $this->day_capping ?? NULL,
            "dimension" => $this->dimension ?? NULL,
            "attribute" => $this->attribute ?? NULL,
            "url" => $this->url ?? NULL,
            "billing_id" => $this->billing_id ?? NULL,
            "price" => $this->price ?? NULL,
            "bidtype" => $this->bidtype ?? NULL,
            "image_url" => $this->image_url ?? NULL,
            "htmltag" => $this->htmltag ?? NULL,
            "from_hour" => $this->from_hour ?? NULL,
            "to_hour" => $this->to_hour ?? NULL,
            "hs_os" => $this->hs_os ?? NULL,
            "operator" => $this->operator ?? NULL,
            "device_make" => $this->device_make ?? NULL,
            "country" => $this->country ?? NULL,
            "city" => $this->city ?? NULL,
            "lat" => $this->lat ?? NULL,
            "lng" => $this->lng ?? NULL,
            "app_name" => $this->app_name ?? NULL,
            "user_list_id" => $this->user_list_id ?? NULL,
            "adplay_logo" => $this->adplay_logo ?? NULL,
            "vast_video_duration" => $this->vast_video_duration ?? NULL,
            "logo_placement" => $this->logo_placement ?? NULL,
            "hs_model" => $this->hs_model ?? NULL,
            "is_rewarded_inventory" => $this->is_rewarded_inventory ?? NULL,
            "pixel_tag" => $this->pixel_tag ?? NULL,
            "dmp_campaign_audience" => $this->dmp_campaign_audience ?? NULL,
            "platform" => $this->platform ?? NULL,
            "open_publisher" => $this->open_publisher ?? NULL,
            "audience_targeting" => $this->audience_targeting ?? NULL,
            "native_title" => $this->native_title ?? NULL,
            "native_type" => $this->native_type ?? NULL,
            "native_data_value" => $this->native_data_value ?? NULL,
            "native_data_cta" => $this->native_data_cta ?? NULL,
            "native_data_rating" => $this->native_data_rating ?? NULL,
            "native_data_price" => $this->native_data_price ?? NULL,
            "native_img_icon" => $this->native_img_icon ?? NULL 
        ];
    }
}
