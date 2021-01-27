<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    /**
     * Getter du client du work
     */
    public function client() {
        return $this->belongsTo('App\Models\Client');
    }

    /**
     * Getter des tags des works
     */
    public function tags() {
        return $this->belongsToMany('App\Models\Tag', 'works_has_tags');
    }
}
