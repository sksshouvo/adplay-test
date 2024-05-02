<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UpdateCampaignRequest;
use App\Http\Requests\StoreCampaignRequest;
use App\Repositories\CampaignRepository;
use App\Http\Resources\CampaignResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use App\Classes\ApiResponseClass;
use App\Models\Campaign;

class CampaignController extends Controller
{
    public function __construct(public CampaignRepository $campaignRepository)
    {
        $this->campaignRepository = $campaignRepository;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index() : JsonResponse
    {
        $data = $this->campaignRepository->index();

        return ApiResponseClass::sendResponse(CampaignResource::collection($data),'',200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : JsonResponse
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCampaignRequest $request) : JsonResponse
    {
        try{
            DB::beginTransaction();
            $campaign = $this->campaignRepository->store($request->validated());
            DB::commit();
            return ApiResponseClass::sendResponse(new CampaignResource($campaign),'Campaign Create Successful',201);

        }catch(\Exception $ex){
            return ApiResponseClass::rollback($ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id) : JsonResponse
    {
        $campaign = $this->campaignRepository->getById($id);

        return ApiResponseClass::sendResponse(new CampaignResource($campaign),'',200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campaign $campaign) : JsonResponse
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCampaignRequest $request, $id) : JsonResponse
    {
        $updateDetails =[
            'name' => $request->name,
            'details' => $request->details
        ];
        DB::beginTransaction();
        try{
             $campaign = $this->campaignRepository->update($updateDetails,$id);

             DB::commit();
             return ApiResponseClass::sendResponse('Campaign Update Successful','',201);

        }catch(\Exception $ex){
            return ApiResponseClass::rollback($ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) : JsonResponse
    {
         $this->campaignRepository->delete($id);

        return ApiResponseClass::sendResponse('Campaign Delete Successful','',204);
    }
}
