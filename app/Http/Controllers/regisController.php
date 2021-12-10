<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class regisController extends Controller
{
    public function regis()
    {
        return view('regis');
    }
    public function store(Request $request)
    {
     $validatedData =  $request->validate([
        // 'name'=>'required',
        // 'email'=>'required',
        // 'username'=>'required',
        // 'password'=>'required',
        'name'=>'required|min:5|max:100',
        'email'=>'required|email:dns|unique:users',
        'username'=>'required|min:5|max:100',
        'password'=>'required|min:5|max:20',
       ]);


       $validatedData['password']=bcrypt($validatedData['password']);
       User::create($validatedData);

       $request->session()->flash('success','Registration successfull! Please Login');

       return redirect('/login');

    //    User::insert([
    //        'name'=> $request->input('name'),
    //        'email'=> $request->input('email'),
    //        'username'=> $request->input('username'),
    //        'password'=> $request->input('password'),

    //    ]);
    //    $validatedData['password']=Hash::make($validatedData['password']);

    }
}

