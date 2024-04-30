<?php

declare(strict_types=1);

namespace App\DTO;

use Illuminate\Http\UploadedFile;
use App\Http\Requests\storeVoyageRequest;


readonly class storeVoyageDTO
{
    public function __construct(
        public string $name,
        public string $description,
        public UploadedFile $image,
        public string $price,
        public string $type_voyage_id,
        public string $destination_id,
    ){
        
    }
    public static function fromRequest(storeVoyageRequest $request)
    {
      
        $validateData = $request->validated();
        
        return new self(
            name: $validateData['name'],
            description: $validateData['description'],
            image: $validateData['image'],
            price: $validateData['price'],
            type_voyage_id: $validateData['type_voyage_id'],
            destination_id: $validateData['destination_id'],
        );
    }
}