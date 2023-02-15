@extends('admin.layouts.main')
@section('container')
    <div class="container mt-5">
        <h3 class="text-center">Tambah Data Bank</h3>
        <form action="/tambah-bank" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Logo</label>
                <input class="form-control bg-white" type="file" name="logo">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Bank</label>
                <input type="text" class="form-control" name="nm_bank" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kode Bank</label>
                <input type="text" class="form-control" name="kd_bank" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">No Rekening</label>
                <input type="number" class="form-control" name="no_rekening" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Pemilik</label>
                <input type="text" class="form-control" name="nama_pemilik" autocomplete="off">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>
        </form>
    </div>
@endsection