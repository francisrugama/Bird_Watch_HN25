<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'type_habitation',
        'address',
        'status',
        'price_night',
        'telephone',
        'responsible',
        'qualification'
    ];
}
