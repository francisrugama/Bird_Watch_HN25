<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable =[
        'status',
        'people',
        'people_count',
        'reservation_date',
        'other_service',
        'price_person',
        'total',
        'visitor_id'
    ];

     public function visitors ()
    {
        return $this->hasMony(Visitor::class);
    }
}
