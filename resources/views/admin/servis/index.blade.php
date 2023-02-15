@extends('admin.layouts.main')
@section('container')
    <div class="container mt-5">
      <h3 class="text-center">Servis Masuk</h3>
      <div class="card">
        <table class="table">
            <thead>
              <tr class="text-center">
                <th scope="col">Pemilik</th>
                <th scope="col">Barang</th>
                <th scope="col">Waktu Servis</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                <tr class="text-center">
                  <th scope="row">{{ $booking->user->name }}</th>
                  <td>
                    @foreach ($booking->merks as $merk)
                        <li style="list-style: none">{{ $merk->nm_merk }}</li>
                    @endforeach
                  </td>
                  <td>{{ $booking->tanggal_booking }}</td>
                  <td>
                    <a href="/servis-dashboard/{{ $booking->id }}" type="button" class="btn btn-outline-danger">Buat Detail</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
@endsection