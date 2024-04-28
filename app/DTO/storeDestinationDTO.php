<?php

declare(strict_types=1);

namespace App\DTO;

use App\Http\Requests\storeDestinationRequest;


readonly class storeDestinationDTO
{
    public function __construct(
        public string $name
    ){
        
    }
    public static function fromRequest(storeDestinationRequest $request)
    {
      
        $validateData = $request->validated();
        
        return new self(
            name: $validateData['name'],
        );
    }
}