<?php

namespace App\Repositories\Eloquent;

use App\Models\category;
use App\DTO\Auth\storeCategoryDTO;
use App\Repositories\categoryRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class categoryRepository.
 */
class categoryRepository extends BaseRepository implements categoryRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param category $model
     */
    public function __construct(category $model)
    {
        parent::__construct($model);
    }

    public function store(storeCategoryDTO $request)
    {
        $data = $this->getArray($request);
        $category = Category::create($data);
        return abort(redirect('/client/dashboard'));

    }
    private function getArray(storeCategoryDTO $storeCategoryDTO)
    {
       
        return [
            'name'=> $storeCategoryDTO->name,

        ];
    }
}
