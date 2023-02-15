@extends('front.layouts.main')
@section('container')
<div class="container p-5">
  <h5 class="card-title text-center pt-2 mb-5" style="font-family: Verdana, Geneva, Tahoma, sans-serif">Detail Servis</h5>
    <div class="row d-flex">
      <form class="d-flex" action="{{ url('/list-servis/' . $detail->id . '/pilih-bank') }}" method="POST">
            @csrf 
            <div class="col-md-6">
              <div class="card">
                <div class="card-body"> 
                  <ul class="list-group" style="list-style: none">
                    <li class="list-group-item d-flex justify-content-between" style="border: none">Nama Pemesan : <span class="fw-bold">{{ $detail->booking->user->name }}</span></li>
                    <li class="list-group-item d-flex justify-content-between" style="border: none">Merk Barang : 
                    @foreach ($detail->booking->merks as $merk)
                      <span class="fw-bold">
                        <ul>
                          <li>{{ $merk->nm_merk }}</li>
                        </ul>
                      </span>
                      @endforeach
                    </li>
                    <li class="list-group-item d-flex justify-content-between" style="border: none">Kendala : 
                      @foreach ($detail->booking->kendalas as $kendala)
                      <span class="fw-bold">
                        <ul>
                          <li>{{ $kendala->nm_kendala }}</li>
                        </ul>
                      </span>
                      @endforeach
                    </li>
                    <li class="list-group-item d-flex justify-content-between" style="border: none">Teknisi : <span class="fw-bold">{{ $detail->teknisi->nama_teknisi }}</span></li>
                    <li class="list-group-item d-flex justify-content-between" style="border: none">Penjelasan Teknisi : <span class="fw-bold">{{ $detail->keterangan_teknisi }}</span></li>
                    <li class="list-group-item d-flex justify-content-between" style="border: none">Alamat Lengkap : <span class="fw-bold">{{ $detail->booking->alamat_lengkap }}, {{ $detail->booking->kecamatan->nm_kecamatan }}, {{ $detail->booking->kota->nm_kota }}</span></li>
                    <li class="list-group-item d-flex justify-content-between" style="border: none">Tanggal Masuk : <span class="fw-bold">{{ $detail->booking->tanggal_booking }}</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <h5 class="card-title text-center pt-2" style="font-family: Verdana, Geneva, Tahoma, sans-serif">Total</h5>
              <div class="card-body">
                <ul class="list-group" style="list-style: none">
                  <li class="list-group-item d-flex justify-content-between" style="border: none">Biaya Servis : <span class="fw-bold">Rp. {{ number_format($servis = $detail->harga) }}</span></li>
                  <li class="list-group-item d-flex justify-content-between" style="border: none">Biaya Sparepart : 
                    <span class="fw-bold">
                          Rp. {{ number_format($sparepart->sum('total')) }}
                    </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between" style="border: none">Biaya Ongkir : <span class="fw-bold">Rp. {{ number_format($ongkir = $detail->booking->kecamatan->hrg_ongkir) }}</span></li>
                  <hr>
                  <li class="list-group-item d-flex justify-content-between" style="border: none">Total Bayar : <span class="fw-bold">
                    Rp. {{ number_format($servis + $ongkir + $sparepart->sum('total')) }}
                  </span></li>
                  <li class="list-group-item d-flex justify-content-between" style="border: none">Status Pembayaran : 
                    <span class="fw-bold">
                    @if ($detail->status == "Sedang Dikerjakan")
                    <span class="badge bg-secondary">{{ $detail->status }}</span>
                    @elseif($detail->status == "Menunggu Pembayaran")
                    <span class="badge bg-warning">{{ $detail->status }}</span>
                    @else
                    <span class="badge bg-success">{{ $detail->status }}</span>
                    @endif
                  </span>
                </li>
                </ul>
              </div>
              @if (isset($cek))
              <button type="submit" class="btn btn-success" {{ $detail->status != 'Menunggu Pembayaran' ? 'disabled' : '' }} disabled>Lanjut Pembayaran</button>    
              @else
              <button type="submit" class="btn btn-success" {{ $detail->status != 'Menunggu Pembayaran' ? 'disabled' : '' }}>Lanjut Pembayaran</button>
              @endif
              </div>
              </div>
              </form>
          </div>
          <div class="col-md-6">
            <h5 class="text-center">Sparepart</h5>
            <div class="card">
              <ul class="list-group list-group-flush">
                @foreach ($sparepart as $part)
                <li class="list-group-item d-flex justify-content-between">{{ $part->nm_sparepart }}<span class="fw-bold">{{ $part->total }}</span></li>
                @endforeach
              </ul>
            </div>
          </div>
    </div>
    
@endsection