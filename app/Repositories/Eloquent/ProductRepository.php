<?php

namespace App\Repositories\Eloquent;

use App\Models\Product;
use App\DTO\Auth\storeProduitDTO;
use App\Repositories\ProductRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class ProductRepository.
 */
class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Product $model
     */
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    public function store(storeProduitDTO $request)
    {
        $data = $this->getArray($request);
        $produit = Product::create($data);

    }
    private function getArray(storeProduitDTO $storeProduitDTO)
    {
       
        return [
            'name'=> $storeProduitDTO->name,
            'description'=> $storeProduitDTO->description,
            'category_id'=> $storeProduitDTO->category_id,
            'price'=> $storeProduitDTO->role,
        ];
    }
    
}
