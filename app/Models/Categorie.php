<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    /**
     * Getter des posts de la catégorie
     */
    public function posts() {
        return $this->hasMany('App\Models\Post');
    }
}
