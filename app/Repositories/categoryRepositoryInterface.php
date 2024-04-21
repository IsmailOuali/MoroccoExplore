<?php

namespace App\Repositories;

use App\DTO\Auth\storeCategoryDTO;

interface categoryRepositoryInterface
{
   // Extend with your methods

   public function store(storeCategoryDTO $request);

}
