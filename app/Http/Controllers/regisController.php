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
       $validatedData = $request->validate([
        'name' => 'required|min:5|max:100',
        'email'=>'required|email:dns|unique:users',
        'username' => 'required|min:3|max:100|unique:users',
        'password'=> 'required|min:5|max:20'
       ]);

       User::create($validatedData);

    }

}

