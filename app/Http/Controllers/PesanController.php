<?php

namespace App\Http\Controllers;
use App\Models\Laptop;
use App\Models\Pesan;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index(Request $request,$id)
    {
        $laptop=Laptop::where('id_laptop',$id)->first();
        $cart = session()->get('cart');
        // dd($id_laptop);
        if (!$cart) {
            $cart=[
                $id =>[
                    'namaLaptop'=>$laptop->namalaptop,
                    'jumlahHarga'=>$laptop->harga
                ]
            ];
        }

        session()->put('cart',$cart);
        return view('pesan',compact('laptop'));
    }
    public function cek(Request $request,$id){

        $laptop=Laptop::where('id_laptop',$id)->first();

        return view('beli',compact('laptop'));
    }
    public function store(Request $request)
    {
        $pesan=new Pesan();
        $pesan->nama=$request->input('nama');
        $pesan->alamat=$request->input('alamat');
        $pesan->nomor=$request->input('nomor');
        $pesan->nama_laptop=$request->input('nama_laptop');
        $pesan->jumlah_harga=$request->input('jumlah_harga');
        $pesan->save();
        session()->forget('cart');
        return redirect('confir');


    }

}
