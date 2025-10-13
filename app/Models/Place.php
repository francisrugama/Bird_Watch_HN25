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
        'availability_schedule',
        'description',
        'type_reserve',
        'tour_id',
        'hotel_id'

    ];

    public function tours(){
        return $this->belongsTo(Tour::class,'tour_id' );
    }

    public function hotels(){
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }
}
