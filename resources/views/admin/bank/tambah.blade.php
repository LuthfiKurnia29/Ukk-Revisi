@extends('admin.layouts.index')
@section('container')
<div class="container m-5">
    <form class="row g-3" action="/tambah-bank" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="col-md-6">
      <label for="inputNamaBank" class="form-label text-white"> Nama Bank</label>
      <input type="text" name="nm_bank" class="form-control bg-white" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputKodeBank" class="form-label text-white">Kode Bank</label>
      <input type="text" name="kd_bank" class="form-control bg-white" id="inputPassword4">
    </div>
    <div class="col-12">
      <label for="inputLogo" class="form-label text-white">Logo Bank</label>
      <input type="file" name="logo" class="form-control bg-white" id="inputAddress">
    </div>
    <div class="col-md-6">
      <label for="inputNoRek" class="form-label text-white">No Rekening</label>
      <input type="text" class="form-control bg-white" name="no_rekening" id="inputAddress2">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label text-white">Nama Pemilik</label>
      <input type="text" class="form-control bg-white" name="nama_pemilik" id="inputCity">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Tambah Data</button>
    </div>
  </form>
</div>
@endsection