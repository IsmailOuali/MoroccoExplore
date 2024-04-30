<?php

namespace App\Models;

use App\Models\TypeVoyage;
use App\Models\Destination;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voyage extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'type_voyages_id',
        'destination_id',
    ];
    public function typeVoyage(): HasOne
    {
        return $this->hasOne(TypeVoyage::class, 'id', 'type_voyage_id');
    }

    /**
     * Define a "has one" relationship with Destination model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function destination(): HasOne
    {
        return $this->hasOne(Destination::class, 'id', 'destination_id');
    }

}
