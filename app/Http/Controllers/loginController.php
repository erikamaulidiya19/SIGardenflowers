<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class loginController extends Controller
{
    public function login()
    {
        return view('login');
    }

}
