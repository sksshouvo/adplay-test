<?php

namespace App\Http\Requests;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreCampaignRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'campaignname' => ['required', 'string', 'max:255'],
            'advertiser' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:255'],
            'appid' => ['required', 'string', 'max:255'],
            'tld' => ['required', 'string', 'max:255'],
            'portalname' => ['nullable', 'string', 'max:255'],
            'creative_type' => ['required', 'string', 'max:255'],
            'creative_id' => ['required', 'integer'],
            'day_capping' => ['required', 'integer'],
            'dimension' => ['required', 'string', 'max:255'],
            'attribute' => ['required', 'string', 'max:255'],
            'url' => ['required', 'url', 'max:255'],
            'billing_id' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric'],
            'bidtype' => ['required', 'string', 'max:255'],
            'image_url' => ['required', 'url', 'max:255'],
            'htmltag' => ['nullable', 'string', 'max:255'],
            'from_hour' => ['required', 'string', 'max:255'],
            'to_hour' => ['required', 'string', 'max:255'],
            'hs_os' => ['required', 'string', 'max:255'],
            'operator' => ['required', 'string', 'max:255'],
            'device_make' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:255'],
            'lat' => ['nullable', 'string', 'max:255'],
            'lng' => ['nullable', 'string', 'max:255'],
            'app_name' => ['nullable', 'string', 'max:255'],
            'user_list_id' => ['required', 'integer'],
            'adplay_logo' => ['required', 'boolean'],
            'vast_video_duration' => ['nullable', 'integer'],
            'logo_placement' => ['required', 'boolean'],
            'hs_model' => ['nullable', 'string', 'max:255'],
            'is_rewarded_inventory' => ['required', 'boolean'],
            'pixel_tag' => ['nullable', 'string', 'max:255'],
            'dmp_campaign_audience' => ['required', 'boolean'],
            'platform' => ['nullable', 'string', 'max:255'],
            'open_publisher' => ['required', 'boolean'],
            'audience_targeting' => ['required', 'boolean'],
            'native_title' => ['nullable', 'string', 'max:255'],
            'native_type' => ['nullable', 'string', 'max:255'],
            'native_data_value' => ['nullable', 'string', 'max:255'],
            'native_data_cta' => ['nullable', 'string', 'max:255'],
            'native_data_rating' => ['nullable', 'string', 'max:255'],
            'native_data_price' => ['nullable', 'string', 'max:255'],
            'native_img_icon' => ['nullable', 'string', 'max:255'],
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ]));
    }
}
