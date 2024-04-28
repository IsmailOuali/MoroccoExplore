<?php

namespace App\Http\Controllers;

use App\Models\TypeVoyage;
use App\Models\Destination;
use App\DTO\storeTypeVoyageDTO;
use App\Http\Requests\StoreTypeVoyageRequest;
use App\Http\Requests\UpdateTypeVoyageRequest;
use App\Repositories\TypeVoyageRepositoryInterface;
use App\Repositories\DestinationRepositoryInterface;
use Illuminate\Support\Facades\View;

class TypeVoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $typeVoyageRepository;
     protected $destinationRepository;
 
     public function __construct(
         TypeVoyageRepositoryInterface $typeVoyageRepository,
         DestinationRepositoryInterface $destinationRepository
     ) {
        $this->typeVoyageRepository = $typeVoyageRepository;
        $this->destinationRepository = $destinationRepository;
     }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeVoyageRequest $request)
    {
        $storeTypeVoyageDTO = storeTypeVoyageDTO::fromRequest($request);
        $this->typeVoyageRepository->store($storeTypeVoyageDTO);
        $destinations = Destination::all();
        return redirect('/client/dashboardGuide')->with('TypeVoyages', $this->typeVoyageRepository->getAll())->with('destinations', $this->destinationRepository->getAllDestinations());
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeVoyage $typeVoyage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeVoyage $typeVoyage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeVoyageRequest $request, TypeVoyage $typeVoyage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeVoyage $typeVoyage)
    {
        //
    }
}
