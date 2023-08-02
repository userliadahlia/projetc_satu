@extends('layout1.main2')
@section('content')


<h4><b>Edit Data Model Anggota</b></h1>
<br>
<form action="{{ asset('anggota/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id_anggota" value="{{$anggota->id_anggota}}">
<div class="mb-3 row">
    <label for="nama_anggota" class="col-sm-2 col-form-label">Nama Anggota</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_anggota" value="{{$anggota->nama_anggota}}" name="nama_anggota">
    </div>
</div>
<div class="mb-3 row">
    <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="alamat" value="{{$anggota->alamat}}" name="alamat">
    </div>
</div>
<div class="mb-3 row">
    <label for="n_hp" class="col-sm-2 col-form-label">No Handphone</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="n_hp" value="{{$anggota->n_hp}}" name="n_hp">
    </div>
</div>
<input type="submit" value="Simpan">
</form>

@endsection