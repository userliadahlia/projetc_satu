<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan_model;

class PenjualanController extends Controller
{
    public function index (){
        $mypenjualan = new Penjualan_model();
         $penjualan = $mypenjualan->tampil_penjualan();
         
         $data = array('penjualan' => $penjualan);
         return view('penjualan/index', $data);
     }
     public function tambah(){
         // return ('Testing');
         return view('penjualan/tambah');
      }
  
      public function tambah_proses(Request $request){
          // return ('Testing Proses');
          $query = \DB::table('penjualan')
          ->insert([
              'nama_barang' => $request->nama_barang,
              'harga'  =>  $request->harga,
              'jumlah'  =>  $request->jumlah,
          ]);
          return redirect('penjualan');
      }
      public function delete ($id_barang){
         $query = \DB::table('penjualan')->where('id_barang',$id_barang)->delete();
         return redirect('penjualan');
     }
 
     public function edit($id_barang){
         $data['penjualan'] = Penjualan_model::where('id_barang',$id_barang)->first();
         return view('penjualan/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Edit Proses');
         $query = Penjualan_model::where('id_barang',$request->id_barang)
         ->update([
             'nama_barang' => $request->nama_barang,
              'harga'  =>  $request->harga,
              'jumlah'  =>  $request->jumlah,
         ]);
         return redirect('penjualan');
     } 
}
