<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\DTO\Auth\storeCategoryDTO;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Repositories\categoryRepositoryInterface;
use App\Repositories\Eloquent\categoryRepository;
use Illuminate\Support\Facades\View;


class CategoryController extends Controller
{
    public function __construct(public categoryRepositoryInterface $repository)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View 
    {
        $categories = $this->repository->getAll();
        return View::make('/client/dashboard', compact('categories'));
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
    public function store(StoreCategoryRequest $request)
    {
        $storeCategoryDTO = storeCategoryDTO::fromRequest($request);
        $this->repository->store($storeCategoryDTO);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');

    }
}
