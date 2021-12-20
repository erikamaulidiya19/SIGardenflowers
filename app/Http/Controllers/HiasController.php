<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Monolog\Handler\FlowdockHandler;
use Illuminate\Http\Request;

class HiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tanamanhias()
    {
            return view('tanamanhias');
    }
    public function datatanaman(){
        return view('tabeltanaman');
    }
    public function datahias(){
        return view('adminhias');
    }

}
