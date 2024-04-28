<?php

namespace App\Repositories;

use App\DTO\storeDestinationDTO;

interface DestinationRepositoryInterface
{
   // Extend with your methods
   public function store(storeDestinationDTO $request);
   public function getAllDestinations();


}
