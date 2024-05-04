<?php

namespace App\Repositories;

use App\Interfaces\CampaignRepositoryInterface;
use App\Models\Campaign;

class CampaignRepository implements CampaignRepositoryInterface
{
    public function index(): mixed {
        return Campaign::all();
    }

    public function getById($id): mixed{
       return Campaign::findOrFail($id);
    }

    public function store(array $data) : mixed {
      return Campaign::create($data);

    }

    public function update(array $data, $id): mixed{
       return Campaign::whereId($id)->update($data);
    }
    
    public function delete($id): mixed{
       Campaign::destroy($id);
    }
}
