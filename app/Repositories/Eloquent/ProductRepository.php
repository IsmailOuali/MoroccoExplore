<?php

namespace App\Repositories\Eloquent;

use App\Models\Produit;
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
    public function __construct(Produit $model)
    {
        parent::__construct($model);
    }

    public function store(storeProduitDTO $request)
    {
        $fileName = pathinfo($request->file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = pathinfo($request->file->getClientOriginalName(), PATHINFO_EXTENSION);
        $fullFileName = $fileName . "-" . time() . '.' . $request->file->getClientOriginalExtension();



        $destinationPath = './assets/uploads/';

        $request->file->move(public_path($destinationPath), $fullFileName);
        $insert  = $this->getArray($request) + ['file' => $fullFileName];


        $produit = Produit::create($insert);
        return $produit;

    }
    private function getArray(storeProduitDTO $storeProduitDTO)
    {
       
        return [
            'name'=> $storeProduitDTO->name,
            'description'=> $storeProduitDTO->description,
            'category_id'=> $storeProduitDTO->category_id,
            'price'=> $storeProduitDTO->price,
        ];
    }

    public function getAllProduits(){
        return Produit::all();
    }
    
}
