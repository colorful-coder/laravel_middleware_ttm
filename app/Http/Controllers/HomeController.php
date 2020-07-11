<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Log;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the user list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userList()
    {
        $user = User::all();
        return view('list',['users'=> $user]);
    }

    /**
     * Show profile.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function checkMD($id)
    {
        return view('profile', ['users' => User::findOrFail($id)]);
    }
}
