<?php

namespace App\Repositories\Eloquent;

use App\Models\Destination;
use App\DTO\storeDestinationDTO;
use App\Repositories\DestinationRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class DestinationRepository.
 */
class DestinationRepository extends BaseRepository implements DestinationRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Destination $model
     */
    public function __construct(Destination $model)
    {
        parent::__construct($model);
    }

    public function store(storeDestinationDTO $request)
    {
        $data = $this->getArray($request);
        $destination = Destination::create($data);

    }
    private function getArray(storeDestinationDTO $storeDestinationDTO)
    {
       
        return [
            'name'=> $storeDestinationDTO->name,

        ];
    }

    public function getAllDestinations()
    {
        return Destination::all();
    }
}
