<?php

namespace App\Repositories;

use App\Interfaces\BidRequestRepositoryInterface;
use App\Models\Campaign;

class BidRequestRepository {

    public function __construct(private BidRequestRepositoryInterface $bidRequestRepositoryInterface) {
        
    }

    public function compareWithCampaign(array $data): mixed {
        
    }
}