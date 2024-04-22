<?php

namespace App\Repositories;

use App\DTO\Auth\storeProduitDTO;

interface ProductRepositoryInterface
{
   // Extend with your methods
   public function store(storeProduitDTO $request);
}
