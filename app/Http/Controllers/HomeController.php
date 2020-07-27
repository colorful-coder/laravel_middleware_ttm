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
        return view('crud/create');
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

    public function testFor()
    {
        $limt = 5;
        for (; true; ) {
            $limt--;
            echo  "hello world!<br> ";
            if ($limt === 0) {
                break;
            }
        }
    }
}
