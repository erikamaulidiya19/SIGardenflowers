<?php

namespace App\Http\Controllers;
use App\Models\Caffe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Monolog\Handler\FlowdockHandler;

class buahController extends Controller
{
    public function databuah(){
        return view('buah');
    }
}
