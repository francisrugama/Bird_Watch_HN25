<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'type_activity',
        'duration',
        'location',
        'type_transport',
        'tour_language',
        'max_capacity',
        'reservation_id',
        'guide_id',
        'tour_categorie_id',
        'admin_id'
    ];

    public function reservations(){
        return $this->belongsTo(Reservation::class, 'reservation_id');
    }

    public function guides(){
        return $this->belongsTo(Guide::class, 'guide_id');
    }

    public function tour_categories(){
        return $this->belongsTo(Tour_categorie::class, 'tour_category_id');
    }

    public function admins(){
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}
