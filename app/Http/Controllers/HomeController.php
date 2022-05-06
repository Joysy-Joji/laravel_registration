<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


//use http\Env\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('/welcome');

    }
    public function login()
    {
        return view('/login');

    }
    public function register()
    {
        return view('/register');

    }
    public function home()
    {
        return view('/home');

    }

    public function insert(Request $request)
    {
        $users = new  User();
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = Hash::make('password');
        $users->save();
        return redirect('/login')->with('status', "Inserted Successfully");
    }





}
