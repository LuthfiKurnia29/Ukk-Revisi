@extends('admin.layouts.main')
@section('container')
<div class="container mt-5">
    <h3 class="text-center">Servis Yang Menunggu Pembayaran</h3>
    <div class="card">
    <table class="table">
        <thead>
          <tr class="text-center">
            <th scope="col">Nama Pemilik</th>
            <th scope="col">Barang</th>
            <th scope="col">Tanggal Servis</th>
            <th scope="col">Total Biaya</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($details as $detail)
            <tr class="text-center">
              <th scope="row">{{ $detail->booking->user->name }}</th>
              <td>
                @foreach ($detail->booking->merks as $merk)
                    <li>{{ $merk->nm_merk }}</li>
                @endforeach
              </td>
              <td>{{ $detail->booking->tanggal_booking }}</td>
              <td>{{ number_format($detail->total_harga) }}</td>
              <td>
                <a href="/servis-menunggubayar/{{ $detail->id }}" type="button" class="btn btn-outline-secondary">Lihat Pembayaran</a>
                {{-- <a href="/servis-dashboard/{{ $detail->id }}" type="button" class="btn btn-outline-danger">Detail</a> --}}
                {{-- <form action="/status-menunggu/{{ $detail->id }}" method="post">
                    @csrf
                <input type="hidden" name="status" value="Menunggu Pembayaran">
                <button type="submit" class="btn btn-outline-success">Menunggu Pembayaran</button>
                </form> --}}
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection