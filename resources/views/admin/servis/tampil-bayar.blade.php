@extends('admin.layouts.main')
@section('container')
    <div class="container mt-5">
        <h3 class="text-center">Pembayaran</h3>
        <div class="row d-flex">
        <div class="col-md-4">
            <img src="{{ asset('storage/'. @$transaksi->pembayaran->bukti_pembayaran) }}" width="200" alt="">
        </div>
        <div class="col-md-8">
            <ul>
                <li>Biaya Servis = {{ @$transaksi->servis->harga }}</li>
                <li>Biaya Sparepart = {{ $spareparts }}</li>
                <li>Ongkir = {{ @$transaksi->servis->booking->kecamatan->hrg_ongkir }}</li>
            </ul>
        </div>
    </div>
    <div class="d-flex justify-content-between mt-3">
        <a href="/servis-menunggubayar" type="button" class="btn btn-outline-danger">Kembali</a>
        <form action="/status-selesai/{{ @$transaksi->servis->id }}" method="post">
            @csrf
            <input type="hidden" name="status" value="Selesai">
            @if (isset($transaksi))
            <button type="submit" class="btn btn-outline-success">Selesai</button>
            @else
            <button type="submit" class="btn btn-outline-success" disabled>Selesai</button>
            @endif
        </form>
    </div>
    </div>
@endsection