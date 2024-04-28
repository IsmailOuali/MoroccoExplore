<?php

namespace App\Repositories\Eloquent;

use App\Models\TypeVoyage;
use App\Repositories\TypeVoyageRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;
use App\DTO\storeTypeVoyageDTO;


/**
 * Class TypeVoyageRepository.
 */
class TypeVoyageRepository extends BaseRepository implements TypeVoyageRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param TypeVoyage $model
     */
    public function __construct(TypeVoyage $model)
    {
        parent::__construct($model);
    }

    public function store(storeTypeVoyageDTO $request)
    {
        $data = $this->getArray($request);
        $typeVoyage = TypeVoyage::create($data);

    }
    private function getArray(storeTypeVoyageDTO $storeTypeVoyageDTO)
    {
       
        return [
            'name'=> $storeTypeVoyageDTO->name,

        ];
    }
    public function getAll()
    {
        return TypeVoyage::all();
    }
}
