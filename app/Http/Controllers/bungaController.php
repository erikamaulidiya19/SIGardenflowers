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
    public function bunga(){
        $data = Flower::all();
            return view('bunga',compact('data'));
    }

    public function bunga_backend()
    {
        $data = Flower::all();
        return view('adminbunga',compact('data'));
    }

    public function databunga(){
        // $data = Flower::skip(0)->take(10)->orderby('namabunga','Asc')->get();

        // return view('tabelbunga',compact('data'));
        $data = Flower::all();
        return view('tabelbunga',compact('data'));

    }

    public function viewinsert(){
        return view('insertbunga');
    }
    public function tambahbunga(Request $request){

        $validatedData =  $request->validate([
            'id_bunga',
            'namabunga'=>'required',
            'tokobunga'=>'required',
            'harga'=>'required',
            'alamatbunga'=>'required',
            'image'=>'image|file|max:1024'


           ]);
            $get=Flower::find($request->id_bunga);

           if($request->file('image')){
            $validatedData['image']=$request->file('image')->store('post-image');
        }
        else{
            $validatedData['image']=$get->image;
        }

           Flower::updateOrCreate([
                    'id_bunga' => $request->input('id_bunga')
                ], [
                   'namabunga'=> $request->input('namabunga'),
                   'tokobunga'=> $request->input('tokobunga'),
                   'harga'=> $request->input('harga'),
                   'alamatbunga'=> $request->input('alamatbunga'),
                   'image'=>$validatedData['image'],

               ]);

            if($request->input('id_bunga')){
                 $request->session()->flash('success','Update Data Berhasil');
            }
            else{
                $request->session()->flash('success','Tambah Data Berhasil');
            }

           return redirect('/adminbunga');
    }

    public function hapusbunga(Request $id_bunga){
        Flower::where('id_bunga', $id_bunga->id_bunga)->delete();
        return redirect('/adminbunga')->with('success','Data Berhasil dihapus');



        // Flower::where('id_bunga', $post->id_bunga)->delete();
        // return redirect('/adminbunga');
    }

    public function editbunga(Request $id_bunga){
       $data = Flower::where('id_bunga', $id_bunga->id_bunga)->first();

        return view('updatebunga', compact('data'));
    }

}
