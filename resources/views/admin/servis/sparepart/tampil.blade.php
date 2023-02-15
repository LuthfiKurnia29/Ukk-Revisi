@extends('admin.layouts.main')
@section('container')
    <div class="container mt-5">
        <h3 class="text-center">Data Sparepart</h3>
        <a href="/servis-dashboard/{{ $booking->id }}/sparepart/tambah" type="button" class="btn btn-outline-danger">Tambah Sparepart</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Sparepart</th>
                <th scope="col">Kuantitas</th>
                <th scope="col">Harga Satuan</th>
                <th scope="col">Harga Total</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($sparepart as $part)
                <tr>
                  <th scope="row">{{ $part->nm_sparepart }}</th>
                  <td>{{ $part->kuantitas }}</td>
                  <td>{{ $part->harga }}</td>
                  <td>{{ $part->total }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
          <a href="/servis-dikerjakan" type="button" class="btn btn-outline-success">Kembali</a>
    </div>
@endsection