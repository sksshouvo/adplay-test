<?php

namespace App\Interfaces;

interface CampaignRepositoryInterface
{
    public function index(): mixed;
    public function getById($id): mixed;
    public function store(array $data): mixed;
    public function update(array $data,$id): mixed;
    public function delete($id): mixed;
}
