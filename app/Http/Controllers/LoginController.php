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
        $result = Auth::attempt(['email' => 'test@example.com', 'password' => '12345678']);

        return $result;

    }
}
