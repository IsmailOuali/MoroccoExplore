<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Panier extends Model
{
    use HasFactory;

    protected $fillable = ['produit_id', 

];

    public function produits(): HasMany
    {
        return $this->hasMany(Produit::class);
    }
}
