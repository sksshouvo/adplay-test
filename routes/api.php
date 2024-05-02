<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignController;

Route::apiResource('campaign', CampaignController::class);
// Route::post('campaign', [CampaignController::class, 'store']);
