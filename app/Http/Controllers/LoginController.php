<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * login index
     */
    public function login()
    {
        $css = '<link rel="stylesheet" href="/css/login.css">';
        return view("login", ['css'=>$css]);
    }

    /**
     * post login
     */
    public function postLogin()
    {
        return redirect('dashboard');
    }
}
