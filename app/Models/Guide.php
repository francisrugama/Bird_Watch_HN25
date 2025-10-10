<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'telephone',
        'experience',
        'language',
        'age',
        'gender'
    ];
    public function tours ()
    {
        return $this->hasOne(Tour::class, 'guide_id');
    }
}
