@extends('front.layouts.main')
@section('container')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Tanggal Masuk</th>
                  <th scope="col">Tanggal Selesai</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pembayarans as $i=>$bayar)  
                <tr>
                  <th scope="row">{{ $i+1 }}</th>
                  <td>{{ $bayar->transaksi->servis->booking->tanggal_booking }}</td>
                  <td>{{ $bayar->transaksi->servis->estimasi_selesai }}</td>
                  <td>
                    <a href="/hasil-bayar/{{ $bayar->id }}" type="button" class="btn btn-outline-success">Lihat Detail</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
          </table>
    </div>
@endsection