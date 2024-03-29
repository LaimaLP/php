<?php

namespace Colors\App\Controllers;

use Colors\App\App;
use Colors\App\Auth;
use Colors\App\Message;


//rodyti prisijungima langa ir handlinti prisijungimus, 

class LoginController
{

    public function index()
    {
        return App::view('auth/login', [
            'title' => 'Login'
        ]);
    }

    public function login($request) //tipiskas kontrolerio darbas. Serverio uzklausia, gauna info ir suformuoja ats
    {
        $email = $request['email'] ?? '';
        $password = $request['password'] ?? '';

        if (Auth::get()->tryLoginUser($email, $password)) {
            Message::get()->set('success', 'You are logged in');
            return App::redirect('colors');
        }

        Message::get()->set('danger', 'Wrong email or password');


        return App::redirect('login');
    }

    public function logout()
    {
        Auth::get()->logout();
        Message::get()->set('success', 'You are logged out');
        return App::redirect('login');
    }
}
