@extends('admin.layouts.main')
@section('container')
    <div class="container mt-5">
        <h3 class="text-center">Tambah Sparepart</h3>
        <form action="/servis-dashboard/{{ $booking->id }}/sparepart" method="post">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" name="nm_sparepart" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Nama Barang Sparepart</label>
              </div>
              <div class="form-floating">
                <input type="number" name="kuantitas" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Jumlah Barang</label>
              </div>
              <div class="form-floating">
                <input type="text" name="harga" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Harga satuan</label>
              </div>
            <button type="submit" class="btn btn-outline-success">Tambah</button>
        </form>
    </div>
@endsection