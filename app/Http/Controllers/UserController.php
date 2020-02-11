<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show()
    {
        return view('myInfos');
    }

    public function store(UserUpdateRequest $request)
    {
        auth()->user()->update([
            'email' => request('mail'),
            'name' => request('nom')
        ]);

        return view('myInfos');
    }
}
