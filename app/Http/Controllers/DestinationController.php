<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\DTO\storeDestinationDTO;
use App\Http\Requests\StoreDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;
use App\Repositories\DestinationRepositoryInterface;
use App\Repositories\TypeVoyageRepositoryInterface;

use Illuminate\Support\Facades\View;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(public destinationRepositoryInterface $repository, public TypeVoyageRepositoryInterface $typeVoyageRepository)
    {
 
    }

 
    public function index(): \Illuminate\Contracts\View\View 
    {
        $destinations = $this->repository->getAllDestinations();
        $typeVoyages = $this->typeVoyageRepository->getAll();
        return View::make('/client/dashboardGuide', compact('destinations', 'typeVoyages'));
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
    public function store(StoreDestinationRequest $request)
    {
        $storeDestinationDTO = storeDestinationDTO::fromRequest($request);
        $this->repository->store($storeDestinationDTO);
        return redirect('/client/dashboardGuide')->with('destinations', $this->repository->getAllDestinations());

    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDestinationRequest $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        $destination->delete();

        return redirect('/client/dashboardGuide');

    }
}
