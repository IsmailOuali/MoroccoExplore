<?php

declare(strict_types=1);

namespace App\DTO\Auth;

use App\Http\Requests\registerRequest;


readonly class registerDTO
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password,
        public string $role,
    ){
        
    }
    public static function fromRequest(registerRequest $request)
    {
      
        $validateData = $request->validated();
        
        return new self(
            name: $validateData['name'],
            email: $validateData['email'],
            password: $validateData['password'],
            role: $validateData['role'],
        );
    }
}