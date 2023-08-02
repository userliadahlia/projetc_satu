<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan_model extends Model
{
    use HasFactory;
    protected $table ="penjualan";
    protected $primaryKey ="id_barang";

    public function tampil_penjualan(){
        $query = \DB::table('penjualan')->get();
        return $query;
    }
}
