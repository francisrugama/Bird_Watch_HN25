<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'descriptions',
        'type_habitation',
        'address',
        'status',
        'price_night',
        'telephone',
        'responsible',
        'qualification'
    ];
    public function places ()
    {
        return $this->hasMony(Place::class);
    }
}
