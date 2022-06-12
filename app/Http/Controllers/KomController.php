<?php

namespace App\Http\Controllers;
use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Monolog\Handler\FlowdockHandler;

class KomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function laptop(){
        $data = Laptop::all();
            return view('laptop',compact('data'));
    }

    public function laptop_backend()
    {
        $data = Laptop::all();
        return view('adminlaptop',compact('data'));
    }

    public function datalaptop(){
        // $data = Flower::skip(0)->take(10)->orderby('namabunga','Asc')->get();

        // return view('tabelbunga',compact('data'));
        $data = Laptop::all();
        return view('tabellaptop',compact('data'));

    }

    public function viewinsert(){
        return view('insertlaptop');
    }
    public function tambahlaptop(Request $request){

        $validatedData =  $request->validate([
            'id_laptop',
            'namalaptop'=>'required',
            'tokolaptop'=>'required',
            'harga'=>'required',
            'alamatlaptop'=>'required',
            'image'=>'image|file|max:1024'


           ]);
            $get=Laptop::find($request->id_laptop);

           if($request->file('image')){
            $validatedData['image']=$request->file('image')->store('post-image');
        }
        else{
            $validatedData['image']=$get->image;
        }

           Laptop::updateOrCreate([
                    'id_laptop' => $request->input('id_laptop')
                ], [
                   'namalaptop'=> $request->input('namalaptop'),
                   'tokolaptop'=> $request->input('tokolaptop'),
                   'harga'=> $request->input('harga'),
                   'alamatlaptop'=> $request->input('alamatlaptop'),
                   'image'=>$validatedData['image'],

               ]);

            if($request->input('id_laptop')){
                 $request->session()->flash('success','Update Data Berhasil');
            }
            else{
                $request->session()->flash('success','Tambah Data Berhasil');
            }

           return redirect('/adminlaptop');
    }

    public function hapuslaptop(Request $id_laptop){
        Laptop::where('id_laptop', $id_laptop->id_laptop)->delete();
        return redirect('/adminlaptop')->with('success','Data Berhasil dihapus');



        // Flower::where('id_bunga', $post->id_bunga)->delete();
        // return redirect('/adminbunga');
    }

    public function editlaptop(Request $id_laptop){
       $data = Laptop::where('id_laptop', $id_laptop->id_laptop)->first();

        return view('updatelaptop', compact('data'));
    }

}
