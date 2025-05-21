<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('login.login');
    }

    public function logar(Request $request)
    {
        $in = $request->only(['email', 'password']);

        if($result = Auth::attempt($in))
        {
            return to_route('posts.index');
        }

        return redirect()->back();
    }
}
