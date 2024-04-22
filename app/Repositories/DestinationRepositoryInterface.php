<?php

namespace App\Repositories;

use App\DTO\Auth\storeDestinationDTO;

interface DestinationRepositoryInterface
{
   // Extend with your methods
   public function store(storeDestinationDTO $request);
   public function getAllDestinations();


}
