<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Getter de la categorie du post
     */
    public function categorie() {
        return $this->belongsTo('App\Models\Categorie');
    }
}
