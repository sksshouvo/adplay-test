<?php

namespace App\Repositories;

use App\Interfaces\BidRequestRepositoryInterface;
use App\Models\Campaign;

class BidRequestRepository implements BidRequestRepositoryInterface {

    public function __construct() {
        
    }

    public function compareWithCampaign(array $data): mixed {

        return $campaign = Campaign::osWiseFilter($data['device']['os'])
        ->deviceModelWiseFiter($data['device']['model'])
        ->countryWiseFilter($data['device']['geo']['country'])
        // ->cityWiseFilter($data['device']['geo']['city'])
        // ->appNameWiseFilter($data['app']['name'])
        // ->dimensionWiseFIlter($data['imp']['w'], $data['banner']['h'], $data['banner']['pos'], $data['banner']['w'])
        ->first();

        \Log::info($campaign);
        
    }
}