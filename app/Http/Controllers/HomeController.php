<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = $request->user();
        $email = $user->email;
        $password = $user->password;

        $data['email'] = $user->email;
        $data['password'] = $user->password;

        $emailnya = $request->user()->alamat;
        return view('home')->with('email', $emailnya);

        return view('home')->with('user', $user);
    }
}
