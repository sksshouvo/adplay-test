<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidateBidRequest;

class BidRequestController extends Controller
{
    public function compareWithCampaign(ValidateBidRequest $request) {
        return $request->all();
    }
}
