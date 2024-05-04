<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidateBidRequest;
use App\Repositories\BidRequestRepository;

class BidRequestController extends Controller
{

    public function __construct(public BidRequestRepository $bidRequestRepository) {
        
    }
    public function compareWithCampaign(ValidateBidRequest $request) {
        return $this->bidRequestRepository->compareWithCampaign($request->validated());
    }
}
