<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = ['title', 'city', 'type', 'duration', 'description', 'price', 'category_id', 'duration_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function duration()
    {
        return $this->belongsTo(Duration::class);
    }
}
