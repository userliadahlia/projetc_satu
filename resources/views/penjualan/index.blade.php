@extends('layout1.main2')
@section('content')

<h4><b>Data Penjualan</b></h4>
<br>
<a href="{{ asset('penjualan/tambah')  }}">Tambah  Data Barang</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>Id Barang</td>
    <td><b>Nama Barang</td>
    <td><b>Harga</td>
    <td><b>Jumlah</td>
    <td><b>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($penjualan as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_barang }}</td>
    <td>{{ $rows->nama_barang }}</td>
    <td>{{ $rows->harga }}</td>
    <td>{{ $rows->jumlah }}</td>
    <td>jumlah
        <a href="{{ asset('penjualan/edit/'.$rows->id_barang ) }}">Ganti</a>
        <a href="{{ asset('penjualan/delete/'.$rows->id_barang ) }}">Hapus</a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection