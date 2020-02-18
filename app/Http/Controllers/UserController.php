<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserMod;

class UserController extends Controller
{
    public function show()
    {
        return view('myInfos');
    }

    public function store(UserUpdateRequest $request)
    {
        UserMod::updateUser($request);
        return redirect()->route('home')->with('message', "Vos informations ont bien étées mise à jour");
    }
}
