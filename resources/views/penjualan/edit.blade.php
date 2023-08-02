@extends('layout1.main2')
@section('content')


<h4><b>Edit Data Katalog Penjualan</b></h1>
<br>
<form action="{{ asset('penjualan/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id_barang" value="{{$penjualan->id_barang}}">
<div class="mb-3 row">
    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_barang" value="{{$penjualan->nama_barang}}" name="nama_barang">
    </div>
</div>
<div class="mb-3 row">
    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="harga" value="{{$penjualan->harga}}" name="harga">
    </div>
</div>
<div class="mb-3 row">
    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="jumlah" value="{{$penjualan->jumlah}}" name="jumlah">
    </div>
</div>
<input type="submit" value="Simpan">
</form>

@endsection