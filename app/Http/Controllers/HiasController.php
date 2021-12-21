<?php

namespace App\Http\Controllers;
use App\Models\Hias;
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
        $data = Hias::all();
        return view('tanamanhias',compact('data'));
    }
    public function datatanaman(){
        $data =Hias::all();
        return view('tabeltanaman',compact('data'));
    }
    public function datahias(){
        $data = Hias::all();
        return view('adminhias',compact('data'));;
    }
    public function viewhias(){
        return view('inserthias');
    }
    public function tambahhias(Request $request){

        $validatedData =  $request->validate([
            'id_hias',
            'namahias'=>'required',
            'tokohias'=>'required',
            'hargahias'=>'required',
            'alamathias'=>'required',
            'imagehias'=>'image|file|max:1024'


           ]);
            $get=Hias::find($request->id_hias);

           if($request->file('imagehias')){
            $validatedData['imagehias']=$request->file('imagehias')->store('post-image_hias');
        }
        else{
            $validatedData['imagehias']=$get->imagehias;
        }

           Hias::updateOrCreate([
                    'id_hias' => $request->input('id_hias')
                ], [
                   'namahias'=> $request->input('namahias'),
                   'tokohias'=> $request->input('tokohias'),
                   'hargahias'=> $request->input('hargahias'),
                   'alamathias'=> $request->input('alamathias'),
                   'imagehias'=>$validatedData['imagehias'],

               ]);

            if($request->input('id_hias')){
                 $request->session()->flash('success','Update Data Berhasil');
            }
            else{
                $request->session()->flash('success','Tambah Data Berhasil');
            }

           return redirect('/adminhias');
    }
    public function hapushias(Request $id_hias){
        Hias::where('id_hias', $id_hias->id_hias)->delete();
        return redirect('/adminhias')->with('success','Data Berhasil dihapus');



        // Flower::where('id_bunga', $post->id_bunga)->delete();
        // return redirect('/adminbunga');
    }

    public function edithias(Request $id_hias){
       $data = Hias::where('id_hias', $id_hias->id_hias)->first();

        return view('updatehias', compact('data'));
    }

}
