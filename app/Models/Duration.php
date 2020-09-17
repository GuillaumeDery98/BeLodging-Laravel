<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Duration extends Model
{
    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }
}
