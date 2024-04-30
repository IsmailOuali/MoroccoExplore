<?php

namespace App\Repositories\Eloquent;

use App\Models\Voyage;
use App\DTO\storeVoyageDTO;
use App\Repositories\VoyageRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class VoyageRepository.
 */
class VoyageRepository extends BaseRepository implements VoyageRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Voyage $model
     */
    public function __construct(Voyage $model)
    {
        parent::__construct($model);
    }

    public function store(storeVoyageDTO $request)
    {
        $fileName = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = pathinfo($request->image->getClientOriginalName(), PATHINFO_EXTENSION);
        $fullFileName = $fileName . "-" . time() . '.' . $request->image->getClientOriginalExtension();



        $destinationPath = './assets/uploads/';

        $request->image->move(public_path($destinationPath), $fullFileName);
        $insert  = $this->getArray($request) + ['image' => $fullFileName];


        $Voyages = Voyage::create($insert);
        return $Voyages;

    }
    private function getArray(storeVoyageDTO $storeVoyagesDTO)
    {
       
        return [
            'name'=> $storeVoyagesDTO->name,
            'description'=> $storeVoyagesDTO->description,
            'image'=> $storeVoyagesDTO->image,
            'type_voyages_id'=> $storeVoyagesDTO->type_voyage_id,
            'destination_id'=> $storeVoyagesDTO->destination_id,
            'price'=> $storeVoyagesDTO->price,
        ];
    }

    public function getAllVoyages(){
        return Voyage::all();
    }
    
}
