<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Produit;
use App\Models\Category;
use Illuminate\Http\Request;
use App\DTO\Auth\storeProduitDTO;
use Illuminate\Support\Facades\View;
use App\Http\Requests\StoreProduitRequest;
use App\Http\Requests\UpdateProduitRequest;
use App\Repositories\ProductRepositoryInterface;



class ProduitController extends Controller
{

    public function __construct(public ProductRepositoryInterface $repository)
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View 
    {
        $produits = $this->repository->getAllProduits();
        $categories = Category::all();
        return View::make('/client/dashboard', ['produits'=> $produits,
        'categories'=> $categories, 
    ]);
    }
    public function storeView(): \Illuminate\Contracts\View\View 
    {
        $produits = $this->repository->getAllProduits();
        $categories = Category::all();
        return View::make('/client/store', ['produits'=> $produits,
        'categories'=> $categories, 
    ]);
    }
    public function storeShow(): \Illuminate\Contracts\View\View 
    {
        $produits = $this->repository->getAllProduits();
        $categories = Category::all();
        return View::make('/client/store', ['produits'=> $produits,
        'categories'=> $categories, 
    ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $produits = Produit::where('name', 'like', '%' . $query . '%')->get();
        $categories = Category::all();

        return view('/client/store', ['produits' => $produits, 'categories'=> $categories]);
    }
    public function searchCat(Request $request)
    {
        $query = $request->input('query');
        $categoryId = $request->input('category');

        $produitsQuery = Produit::query();

        if (!empty($query)) {
            $produitsQuery->where('name', 'like', '%' . $query . '%');
        }

        if (!empty($categoryId)) {
            $produitsQuery->where('category_id', $categoryId);
        }

        $produits = $produitsQuery->get();
        $categories = Category::all();

        return view('/client/store', ['produits' => $produits, 'categories'=> $categories]);
    }

    public function addCart(Request $request)
{
    $request->validate([
        'product_id' => 'required|exists:produits,id',
        'name' => 'required',
        'price' => 'required',
    ]);

    $product_id = $request->input('product_id');

    Panier::create([
        'product_id' => $product_id,
        'name' => $name,
        'price'=> $price,
    ]);

    return redirect()->route('panier')->with('success', 'Product added to cart successfully.');
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
    public function store(StoreProduitRequest $request)
    {
        $storeProductDTO = storeProduitDTO::fromRequest($request);
        $this->repository->store($storeProductDTO);
        return redirect()->route('dashboardArtisan')->with('success', 'Category deleted successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProduitRequest $request, Produit $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();

        return redirect()->route('dashboardArtisan')->with('success', 'Category deleted successfully.');
        
    }
}
