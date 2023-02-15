@extends('admin.layouts.main')
@section('container')
    <div class="container">
        <h3 class="text-center">Tambah Kota</h3>
        <form action="daftar-kota" method="post">
            @csrf
            <div class="card p-4">
                <label for="" class="form-label">Nama Kota</label>
                <input type="text" name="nm_kota" class="form-control text-dark" id="">
                <button type="submit" class="btn btn-outline-success">Tambah Kota</button>
            </div>
        </form>
    </div>
@endsection