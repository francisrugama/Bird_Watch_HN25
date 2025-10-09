<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

<<<<<<< HEAD:app/Models/Catalog.php
    protected $fillable = [
        'title',
        'description',
        'image',
=======
     protected $table = 'tours_categories';
     
    protected $fillable =[
        'name',
        'description'
>>>>>>> main:app/Models/Tour_categorie.php
    ];
    public function tours ()
    {
        return $this->hasMany(Tour::class);
    }
}
