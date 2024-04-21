<?php

namespace App\Repositories;

use App\DTO\Auth\registerDTO;
use App\DTO\Auth\loginDTO;

interface UserRepositoryInterface
{
   // Extend with your methods
   public function register(registerDTO $registerDTO);
   public function login(loginDTO $loginDTO);
}
