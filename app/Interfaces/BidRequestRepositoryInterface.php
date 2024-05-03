<?php

namespace App\Interfaces;

interface BidRequestRepositoryInterface {

    public function compareWithCampaign(array $data): mixed;

}