<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'email',
        'telephone',
        'age',
        'language',
        'country',
        'gender',
        'indentifcation_type',
        'identification_number',
        'identification_type'
    ];
    public function historials_details ()
    {
        return $this->hasMony(Historial_detail::class);
    }

    public function reservations ()
    {
        return $this->hasOne(Reservation::class);
    }
}
