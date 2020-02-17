<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMod extends Model
{
    public static function updateUser($request)
    {
        auth()->user()->update([
            'email' => request('mail'),
            'name' => request('nom')
        ]);
    }
}
