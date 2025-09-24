<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'address',
        'avilability_schedule',
        'description',
        'tour_id',
        'hotel_id'

    ];

    public function places(){
        return $this->belongsTo(Place::class);
    }

    public function hotels(){
        return $this->belongsTo(Hotel::class);
    }
}
