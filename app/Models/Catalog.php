<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

        protected $table = 'tours_categories';

    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}
