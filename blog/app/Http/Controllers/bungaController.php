<?php

namespace App\Http\Controllers;
use App\Models\Flower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Monolog\Handler\FlowdockHandler;

class bungaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bunga_backend()
    {
        $data = Flower::all();
        return view('admin',compact('data'));
    }
}
