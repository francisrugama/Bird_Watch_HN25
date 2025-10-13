<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial_detail extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'status',
        'type_service',
        'type_payment',
        'total',
        'reservation_id',
        'visitor_id',
        'tour_id'
    ];

    public function reservations() {
        return $this->belongsTo(Reservation::class, 'reservation_id');
    }

    public function visitors(){
        return $this->belongsTo(Visitor::class, 'visitor_id');
    }

    public function tours(){
        return $this->belongsTo(Tour::class, 'tour_id');
    }
}
