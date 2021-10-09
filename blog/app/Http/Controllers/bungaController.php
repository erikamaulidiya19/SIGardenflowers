<?php

namespace App\Http\Controllers;
use App\Models\Bunga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class bungaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bunga_backend()
    {
        $data = Bunga::all();
        return view('bunga.bunga_backend', compact('bungq'));
    }
}
