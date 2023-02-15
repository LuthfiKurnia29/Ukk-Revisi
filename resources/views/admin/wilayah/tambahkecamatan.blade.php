@extends('admin.layouts.main')
@section('container')
    <div class="container mt-5">
        <h3 class="text-center">Tambah Kecamatan di {{ $kota->nm_kota }}</h3>
        <form action="/tambah-kecamatan/{{ $kota->id }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Kecamatan</label>
              <input type="text" class="form-control" name="nm_kecamatan" id="exampleInputEmail1" aria-describedby="emailHelp">
              <input type="hidden" name="kota_id" value="{{ $kota->id }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="number" name="hrg_ongkir" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection