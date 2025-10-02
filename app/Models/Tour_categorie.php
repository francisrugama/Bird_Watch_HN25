<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour_categorie extends Model
{
    use HasFactory;

     protected $table = 'tours_categories';

    protected $fillable =[
        'name',
        'description'
    ];
    public function tours ()
    {
        return $this->hasMony(Tour::class);
    }
}
