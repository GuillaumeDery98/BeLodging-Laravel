<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duration extends Model
{
    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }
}
