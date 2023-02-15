@extends('front.layouts.main')
@section('container')
<div class="container p-5 mt-5 border border-warning mb-5">
    <div class="text-center">
        <img src="{{ asset('front/img/about-1.jpg') }}" width="80" class="img-fluid" alt="">
    </div>
    <div class="row d-flex justify-content-between px-4" style="margin-top: 3em">
        <div class="col-md-6">
            <p>2-Cool Servis AC</p>
            <p>Jl. Banyu Urip Lor III A No. 8, Sawahan, Surabaya, Jawa Timur</p>
            <p>088217318512</p>
        </div>
        <div class="col-md-6 text-end">
            No. Invoice : {{ $detail->no_invoice }}
        </div>
    </div>

    <div class="col-12">
        <li class="d-flex" style="margin-left:3em"> Pemilik <span class="fw-bold" style="margin-left: 7em">  : <span style="margin-left:3em">{{ auth()->user()->name }}</span> </span> </li>
        <li class="d-flex" style="margin-left:3em"> Alamat <span class="fw-bold" style="margin-left: 7em">  : <span style="margin-left:3em">{{ $detail->transaksi->servis->booking->alamat_lengkap }}, {{ $detail->transaksi->servis->booking->kecamatan->nm_kecamatan }}, {{ $detail->transaksi->servis->booking->kota->nm_kota }}</span> </span> </li>
        <li class="d-flex" style="margin-left:3em"> No. Telepon <span class="fw-bold" style="margin-left: 5em">  : <span style="margin-left:3em">{{ auth()->user()->no_telepon }}</span> </span> </li>
    </div>

    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">Barang Diservis</th>
            <th scope="col">SparePart</th>
            <th scope="col">Harga Sparepart</th>
            <th scope="col">Harga Servis</th>
            <th scope="col">Kode Unik</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
                @foreach ($detail->transaksi->servis->booking->merks as $merk)
               <li>{{ $merk->nm_merk }}</li>
                @endforeach
            </td>
            <td>{{ $detail->transaksi->servis->sparepart->nm_sparepart }}</td>
            <td>{{ number_format($s = $detail->transaksi->servis->sparepart->harga) }}</td>
            <td>{{ number_format($i = $detail->transaksi->servis->harga) }}</td>
            <td>{{ $last_digit }}</td>
          </tr>
        </tbody>
      </table>
      <li style="list-style: none">
        Pesanan ini dikerjakan oleh {{ $detail->transaksi->servis->teknisi->nama_teknisi }}
      </li>
        <li style="list-style: none">Total Biaya Servis untuk nomor invoice <span class="fw-bold">{{ $detail->no_invoice }}</span> adalah sebesar Rp. <span class="fw-bold">{{ number_format($s + $i + $last_digit) }}</span></li>
        <li class="d-flex mb-4">Dan Sudah Dibayarkan Melalui Bank {{ $detail->bank->nm_bank }}, dengan bukti sebagai berikut : 
        </li>
        <span class="fw-bold text-end"><img src="{{ asset('storage/' . $detail->bukti_pembayaran) }}" class="text-end" width="250" height="250" alt=""></span>

</div>
@endsection