<?php

declare(strict_types=1);

namespace App\DTO\Auth;

use App\Http\Requests\storeCategoryRequest;


readonly class storeCategoryDTO
{
    public function __construct(
        public string $name,
    ){
        
    }
    public static function fromRequest(storeCategoryRequest $request)
    {
      
        $validateData = $request->validated();
        
        return new self(
            name: $validateData['name'],

        );
    }
}