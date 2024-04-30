<?php

namespace App\Repositories;

use App\DTO\storeVoyageDTO;


interface VoyageRepositoryInterface
{
   public function store(storeVoyageDTO $request);
   public function getAllVoyages();


}
