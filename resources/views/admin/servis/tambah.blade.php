@extends('admin.layouts.index')
@section('container')
    <div class="container mt-5">
        <div class="card justify-content-center">
            <div class="card-header text-center">Tambah Teknisi</div>
            <div class="card-body">
                <form action="/teknisi" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Foto Diri</label>
                        <input type="file" class="form-control" name="foto" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                    </div>
                    <div class="mb-3">
                        <label for="floatingInput" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_teknisi" id="floatingInput">
                    </div>
                    <div class="mb-3">
                        <label for="floatingInput" class="form-label">No Telepon</label>
                        <input type="number" name="no_telepon" class="form-control" id="floatingInput">
                    </div>
                    <div class="mb-3">
                        <label for="floatingInput" class="form-label">Alamat Lengkap</label>
                        <input type="text" name="alamat" class="form-control" id="floatingInput">
                    </div>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </form>
            </div>
        </div>
    </div>
@endsection