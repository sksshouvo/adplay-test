<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        "campaignname",
        "advertiser",
        "code",
        "appid",
        "tld",
        "portalname",
        "creative_type",
        "creative_id",
        "day_capping",
        "dimension",
        "attribute",
        "url",
        "billing_id",
        "price",
        "bidtype",
        "image_url",
        "htmltag",
        "from_hour",
        "to_hour",
        "hs_os",
        "operator",
        "device_make",
        "country",
        "city",
        "lat",
        "lng",
        "app_name",
        "user_list_id",
        "adplay_logo",
        "vast_video_duration",
        "logo_placement",
        "hs_model",
        "is_rewarded_inventory",
        "pixel_tag",
        "dmp_campaign_audience",
        "platform",
        "open_publisher",
        "audience_targeting",
        "native_title",
        "native_type",
        "native_data_value",
        "native_data_cta",
        "native_data_rating",
        "native_data_price",
        "native_img_icon" 
    ];

    public function scopeOsWiseFilter (Builder $query, string $os = NULL) {
        if ($os) {
            $query->where("hs_os", "like" ,"%{$os}%");
        }
    }

    public function scopeDeviceModelWiseFilter(Builder $query, string $model = NULL) {
        
        if ($model) {
            $query->where("hs_model", "like" ,"%{$model}%");
        }
    } 
    public function scopeCountryWiseFilter (Builder $query, string $country = NULL) {

        if ($country) {
            $query->where("country", $country);
        }
    } 
    public function scopeCityWiseFilter (Builder $query, string $city) {
        if ($city) {
            $query->where("city", $city);
        }

    } 
    public function scopeAppNameWiseFilter (Builder $query, string $appName) {
        if ($appName) {
            $query->where("app_name", $appName);
        }
    } 
    public function scopeDimensionWiseFilter(Builder $query, array $dimension) {
        if ($dimension) {
            $query->whereIn("dimension", $dimension);
        }
    } 
}
