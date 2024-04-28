<?php

namespace App\Repositories;
use App\DTO\storeTypeVoyageDTO;


interface TypeVoyageRepositoryInterface
{
   // Extend with your methods

   public function store(storeTypeVoyageDTO $request);
   public function getAll();
}
