<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota_model;

class AnggotaController extends Controller
{
    public function index (){
        $myanggota = new Anggota_model();
         $anggota = $myanggota->tampil_anggota();
         
         $data = array('anggota' => $anggota);
         return view('anggota/index', $data);
     }
     public function tambah(){
         // return ('Testing');
         return view('anggota/tambah');
      }
  
      public function tambah_proses(Request $request){
          // return ('Testing Proses');
          $query = \DB::table('anggota')
          ->insert([
              'nama_anggota' => $request->nama_anggota,
              'alamat'  =>  $request->alamat,
              'n_hp'  =>  $request->n_hp,
          ]);
          return redirect('anggota');
      }
      public function delete ($id_anggota){
         $query = \DB::table('anggota')->where('id_anggota',$id_anggota)->delete();
         return redirect('anggota');
     }
 
     public function edit($id_anggota){
         $data['anggota'] = Anggota_model::where('id_anggota',$id_anggota)->first();
         return view('anggota/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Edit Proses');
         $query = Anggota_model::where('id_anggota',$request->id_anggota)
         ->update([
            'nama_anggota' => $request->nama_anggota,
            'alamat'  =>  $request->alamat,
            'n_hp'  =>  $request->n_hp,
         ]);
         return redirect('anggota');
     } 
 
}
