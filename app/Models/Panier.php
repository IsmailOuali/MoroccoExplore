<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Panier extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 
    'name',
    'price'
];

    public function produits()
    {
        return $this->hasMany(Produit::class);
    }
}
