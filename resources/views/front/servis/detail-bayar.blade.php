@extends('front.layouts.main')
@section('container')
    <div class="container p-4">
      <h3 class="text-center mb-3">Detail Pembayaran</h3>
        <div class="row">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center">
              Order Details
            </div>
            <ul class="list-group list-group-flush" style="list-style: none">
              <li class="list-group-item d-flex justify-content-between" style="border:none" >Nama Pemilik<span class="fw-bold">{{ $pembayaran->transaksi->servis->booking->user->name }}</span></li>
              <li class="list-group-item d-flex justify-content-between" style="border:none">Barang : 
                @foreach ($pembayaran->transaksi->servis->booking->merks as $merk)
                <span class="fw-bold">
                   {{ $merk->nm_merk }}
                </span>
                  @endforeach
              </li>
              <li class="list-group-item d-flex justify-content-between" style="border:none">Kendala : 
                @foreach ($pembayaran->transaksi->servis->booking->kendalas as $kendala)  
                <span class="fw-bold">
                  {{ $kendala->nm_kendala }}
                </span>
                @endforeach
              </li>
              <li class="list-group-item d-flex justify-content-between" style="border:none">Penjelasan Teknisi : <span class="fw-bold text-end">{{ $pembayaran->transaksi->servis->keterangan_teknisi }}</span></li>
              <li class="list-group-item d-flex justify-content-between" style="border:none">Alamat Lengkap : <span class="fw-bold">{{ $pembayaran->transaksi->servis->booking->alamat_lengkap }}, {{ $pembayaran->transaksi->servis->booking->kecamatan->nm_kecamatan }}, {{ $pembayaran->transaksi->servis->booking->kota->nm_kota }}</span></li>
              <li class="list-group-item d-flex justify-content-between" style="border:none">Tanggal Masuk : <span class="fw-bold">{{ Carbon\Carbon::parse($pembayaran->transaksi->servis->booking->tanggal_booking)->format('H:i, d M Y') }}</span></li>
            </ul>
          </div>
        </div>
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header text-center">Total</div>  
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between" style="border:none">Biaya Servis : <span class="fw-bold">Rp. {{ @number_format($total = $pembayaran->transaksi->servis->harga + $pembayaran->transaksi->servis->sparepart->harga) }}</span></li>
                    <li class="list-group-item d-flex justify-content-between" style="border:none">Biaya Sparepart : <span class="fw-bold">Rp. {{ @number_format($hrg_sparepart) }}</span></li>
                    <li class="list-group-item d-flex justify-content-between" style="border:none">Kode Unik : <span class="fw-bold">{{ number_format($last_digit) }}</span></li>
                    <li class="list-group-item d-flex justify-content-between" style="border:none">Biaya Ongkir : <span class="fw-bold">Rp. {{ number_format($ongkir = $pembayaran->transaksi->servis->booking->kecamatan->hrg_ongkir) }}</span></li>
                    <hr>
                    <li class="list-group-item d-flex justify-content-between" style="border:none">Total Jumlah Harus Dibayar : <span class="fw-bold">Rp. {{ number_format( $pembayaran->total_bayar) }}</span></li>
                  </ul>
              </div>    
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header text-center">Detail Bank</div>
              <ul class="list-group">
                  <div class="text-center">
                    <img src="{{ asset('storage/' . $pembayaran->bank->logo) }}" width="200" alt="">
                  </div>
                  <li class="list-group-item d-flex justify-content-between" style="border:none">Kode Bank : <span class="fw-bold">{{ $pembayaran->bank->kd_bank }}</span></li>
                  <li class="list-group-item d-flex justify-content-between" style="border:none">No Rekening : <span class="fw-bold">{{ $pembayaran->bank->no_rekening }}</span></li>
                  <li class="list-group-item d-flex justify-content-between" style="border:none">Atas Nama : <span class="fw-bold">{{ $pembayaran->bank->nama_pemilik }}</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <p class="text-center">Silahkan Lakukan Pembayaran Ke No. Rekening di Samping</p>
            <img src="" id="foto-pembayaran" width="150" height="150" class="my-2" />
            <form action="/detail-pembayaran/{{ $pembayaran->id }}/upload-bukti" method="post" enctype="multipart/form-data">
              @csrf
              <input onchange="photoChange()" accept="jpg" type="file" class="form-control" name="bukti_pembayaran" required>
              <button type="submit" class="btn btn-success">Upload Sekarang</button>
            </form>
          </div>
        </div>
    </div>
@endsection
@section('script')
   <script>
    function photoChange() {
      const e = event;
      const file = e.target.files[0]
      const reader = new FileReader();
      const img = document.getElementById('foto-pembayaran')

      reader.readAsDataURL(file)
      reader.onload = function() {
        img.src = reader.result
      }
    }
   </script>
@endsection