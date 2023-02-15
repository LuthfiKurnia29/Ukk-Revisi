@extends('admin.layouts.main')
@section('container')
    <div class="container mt-5">
        <form action="/teknisi" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Foto Teknisi</label>
            <input class="form-control bg-white" type="file" name="foto">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Teknisi</label>
            <input type="text" class="form-control" name="nama_teknisi" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
            <input type="number" class="form-control" name="no_telepon" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" autocomplete="off">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Tambah</button>
        </div>
        </form>
    </div>
@endsection