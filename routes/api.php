<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\BidRequestController;

Route::apiResource('campaign', CampaignController::class);
Route::post('bid-request', [BidRequestController::class, 'compareWithCampaign']);
