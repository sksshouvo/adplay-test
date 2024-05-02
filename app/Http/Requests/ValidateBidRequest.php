<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateBidRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Assuming no specific authorization is required
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
{
    return [
            'imp' => ['required', 'array'],
            'app.name' => ['required', 'string'],
            'app.bundle' => ['required', 'string'],
            'app.publisher.id' => ['required', 'string'],
            'app.publisher.ext.country' => ['required', 'string'],
            'app.content.url' => ['required', 'url'],
            'app.content.userrating' => ['required', 'numeric', 'min:0', 'max:5'],
            'app.content.livestream' => ['required', 'boolean'],
            'app.content.language' => ['required', 'string'],
            'app.storeurl' => ['required', 'url'],
            'device.ua' => ['required', 'string'],
            'device.ip' => ['required', 'ip'],
            'device.geo.lat' => ['required', 'numeric'],
            'device.geo.lon' => ['required', 'numeric'],
            'device.geo.country' => ['required', 'string'],
            'device.geo.city' => ['required', 'string'],
            'device.geo.zip' => ['required', 'string'],
            'device.make' => ['required', 'string'],
            'device.model' => ['required', 'string'],
            'device.os' => ['required', 'string'],
            'device.osv' => ['required', 'string'],
            'device.devicetype' => ['required', 'integer'],
            'device.ifa' => ['required', 'string'],
            'device.lmt' => ['required', 'boolean'],
            'device.w' => ['required', 'integer'],
            'device.h' => ['required', 'integer'],
            'device.pxratio' => ['required', 'numeric'],
            'imp.*.id' => ['required', 'string'],
            'imp.*.banner.w' => ['required', 'integer'],
            'imp.*.banner.h' => ['required', 'integer'],
            'imp.*.banner.pos' => ['required', 'integer'],
            'imp.*.banner.api' => ['required', 'array'],
            'imp.*.banner.format' => ['required', 'array'],
            'imp.*.displaymanager' => ['required', 'string'],
            'imp.*.instl' => ['required', 'integer'],
            'imp.*.tagid' => ['required', 'string'],
            'imp.*.bidfloor' => ['required', 'numeric'],
            'imp.*.bidfloorcur' => ['required', 'string'],
            'imp.*.secure' => ['required', 'boolean'],
            'imp.*.exp' => ['required', 'integer'],
            'imp.*.metric' => ['required', 'array'],
            'imp.*.ext' => ['required', 'array'],
            'imp.*.ext.billing_id' => ['required', 'array'],
            'imp.*.ext.publisher_settings_list_id' => ['required', 'array'],
            'imp.*.ext.allowed_vendor_type' => ['required', 'array'],
            'imp.*.ext.creative_enforcement_settings' => ['required', 'array'],
            'imp.*.ext.auction_environment' => ['required', 'integer'],
            'user.id' => ['required', 'string'],
            'at' => ['required', 'integer'],
            'tmax' => ['required', 'integer'],
            'cur' => ['required', 'array'],
            'bcat' => ['required', 'array'],
            'source.ext.omidpn' => ['required', 'string'],
            'source.ext.omidpv' => ['required', 'string'],
            'source.ext.schain' => ['required', 'array'],
            'ext.google_query_id' => ['required', 'string'],
            'ext.fcap_scope' => ['required', 'integer'],
            'ext.privacy_treatments' => ['required', 'array'],
        ];
    }
}
