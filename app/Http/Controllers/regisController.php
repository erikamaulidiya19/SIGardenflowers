<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class regisController extends Controller
{
    public function regis()
    {
        return view('regis');
    }
    public function store(Request $request)
    {
       $request->validate([
        'name'=>'required',
        'email'=>'required',
        'username'=>'required',
        'password'=>'required',

       ]);

       User::insert([
           'name'=> $request->input('name'),
           'email'=> $request->input('email'),
           'username'=> $request->input('username'),
           'password'=> $request->input('password'),

       ]);
       return view('login');
    }

}

