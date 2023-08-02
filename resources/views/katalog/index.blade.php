@extends('layout1.main2')
@section('content')

<h4><b>Data Katalog</b></h4>
<br>
<a href="{{ asset('katalog/tambah')  }}">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>Id_katalog</td>
    <td><b>Nama Katalog</td>
    <td><b>Penerbit</td>
    <td><b>Pengarang</td>
    <td><b>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($katalog as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_katalog }}</td>
    <td>{{ $rows->nama_katalog }}</td>
    <td>{{ $rows->penerbit }}</td>
    <td>{{ $rows->pengarang }}</td>
    <td>
        <a href="{{ asset('katalog/edit/'.$rows->id_katalog ) }}">Ganti</a>
        <a href="{{ asset('katalog/delete/'.$rows->id_katalog ) }}">Hapus</a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection