<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tour extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'description',
        'duration',
        'location',
        'type_transport',
        'tour_language',
        'max_capacity',
        'reservation_id',
        'guide_id',
        'tour_category_id',
        'admin_id'
    ];

    public function reservations(){
        return $this->belongsTo(Reservation::class);
    }

    public function guides(){
        return $this->belongsTo(Guide::class);
    }

    public function tours_categories(){
        return $this->belongsTo(TourCategory::class);
    }

    public function admins(){
        return $this->belongsTo(Admin::class);
    }
}
