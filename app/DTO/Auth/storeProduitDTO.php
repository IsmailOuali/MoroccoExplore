<?php

declare(strict_types=1);

namespace App\DTO\Auth;

use Illuminate\Http\UploadedFile;
use App\Http\Requests\storeProduitRequest;


readonly class storeProduitDTO
{
    public function __construct(
        public string $name,
        public string $description,
        public UploadedFile $file,
        public string $category_id,
        public string $price,
    ){
        
    }
    public static function fromRequest(storeProduitRequest $request)
    {
      
        $validateData = $request->validated();
        
        return new self(
            name: $validateData['name'],
            description: $validateData['description'],
            file: $validateData['file'],
            category_id: $validateData['category_id'],
            price: $validateData['price'],
        );
    }
}