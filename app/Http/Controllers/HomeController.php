<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Currentpassword;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Auth;

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

    public function showchangepasswordget(){
        return view('changepassword');
    }

    public function changePassword(Request $req){
        $validatedData = $req->validate([
            'current-password' => ['required', new currentpassword],
            'new_password' => 'required|min:8|confirmed',
        ]);
        $req->user()->update([
            'password'=> Hash::make($req->new_password)
        ]);
        return redirect()->back()->with("success","Password successfully changed!");
    }
}
