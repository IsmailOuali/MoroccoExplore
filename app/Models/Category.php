<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use  App\Models\Produit;


class Category extends Model
{
    use HasFactory;
    /**
     * Get all of the products for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produits(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    protected $fillable = [
        'name',
    ];
}
