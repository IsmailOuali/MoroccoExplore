<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use App\Models\TypeVoyage;
use App\DTO\storeVoyageDTO;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests\StoreVoyageRequest;
use App\Http\Requests\UpdateVoyageRequest;
use App\Repositories\VoyageRepositoryInterface;



class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct(VoyageRepositoryInterface $repository)
     {
         $this->repository = $repository;
     }

    public function index(): \Illuminate\Contracts\View\View 
    {
        $voyages = $this->repository->getAllVoyages();
        $type_voyages = TypeVoyage::all();
        $destinations = Destination::all();
        return View::make('/client/dashboardGuide', ['voyages'=> $voyages,
        'type_voyages'=> $type_voyages, 'destinations'=>$destinations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVoyageRequest $request)
    {
        $storeVoyageDTO = storeVoyageDTO::fromRequest($request);
        $this->repository->store($storeVoyageDTO);
        return redirect()->route('voyages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Voyage $voyage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voyage $voyage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVoyageRequest $request, Voyage $voyage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voyage $voyage)
    {
        //
    }
}
