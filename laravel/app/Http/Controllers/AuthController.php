<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class AuthController extends Controller
{
    use LoginTrait;

    public function register()
    {

      return view('register');
    }

    public function storeUser()
    {
      $request = request();

        /* $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]); */

        $this->createUser($request);

        return redirect('products');
    }

    public function login()
    {

      return view('login');
    }

    public function authenticate()
    {
      $request = request();

        if (!$this->loginUser($request->email, $request->password)) {
          return redirect('login')->with('error', 'Ups! You have entered invalid credentials');
        } else {
          return redirect('products');
        }
    }

    public function logout() {
      Auth::logout();

      return redirect('login');
    }

    public function home()
    {
      return view('home');
    }
}