<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class UserController extends Controller
{
    //
    public function show($id)
    {
        $user = User::find($id);
        
        return view('profile', ['user'=> $user]);
    }
}
