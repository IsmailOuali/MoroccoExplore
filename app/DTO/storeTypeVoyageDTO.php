<?php

declare(strict_types=1);

namespace App\DTO;

use App\Http\Requests\storeTypeVoyageRequest;


readonly class storeTypeVoyageDTO
{
    public function __construct(
        public string $name
    ){
        
    }
    public static function fromRequest(storeTypeVoyageRequest $request)
    {
      
        $validateData = $request->validated();
        
        return new self(
            name: $validateData['name'],
        );
    }
}