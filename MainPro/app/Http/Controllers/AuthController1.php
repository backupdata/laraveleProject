<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    protected $redirectTo = '/';

    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
    /**
      * Create a check if $remember is true due to a fault I found
      */

        if (isset($request->remember)) {
            $remember = true;
        } else {
            $remember = false;
        }

        $this->validate($request, [
            'username'  => 'required',
            'password'  => 'required'
        ]);

        if (!Auth::attempt(['username' => $request->username, 'password' => $request->password], $remember)) {
            return redirect('/');
        }

        return redirect()->intended('/');

        /**
         * If the username and password provided match a user in the database (from the username)
         * Log the user in behind the scenes
         * Then a redirect to home
         */
    }

    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|unique:users',
            'username'  => 'required|unique:users',
            'password'  => 'required'
        ]);

        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'username'  => $request->username,
            'password'  => bcrypt($request->password)
        ]);

        return redirect('/login');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}