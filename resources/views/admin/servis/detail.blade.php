@extends('admin.layouts.main')
@section('container')
    <div class="container mt-5">
        <h3 class="text-center mb-5">Detail Servis {{ $booking->user->name }}</h3>
        <form class="row g-3 justify-content-center" action="/servis-dashboard/{{ $booking->id }}" method="POST">
            @csrf
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Barang</label>
              @foreach ($booking->merks as $merk)
                  <li>{{ $merk->nm_merk }}</li>
              @endforeach
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Kendala</label>
              @foreach ($booking->kendalas as $kendala)
                  <li>{{ $kendala->nm_kendala }}</li>
              @endforeach
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Teknisi</label>
              <select class="form-select" name="teknisi_id" aria-label="Default select example">
                <option selected>Pilih Teknisi..</option>
                    @foreach ($teknisis as $teknisi)
                    <option value="{{ $teknisi->id }}">{{ $teknisi->nama_teknisi }}</option>
                    @endforeach
              </select>
            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Keterangan Teknisi</label>
              <textarea name="keterangan_teknisi" class="form-control" cols="70" rows="5" value=></textarea>
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Status</label>
              <input type="hidden" name="status" value="Sedang Dikerjakan">
            </div>
            <div class="col-md-6">
              <label for="" class="form-label">Biaya Servis</label>
              <input type="number" class="form-control" name="harga" id="" required>
            </div>
            <div class="col-md-12 justify-content-center">
              <label for="" class="form-label text-center">Sparepart</label>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Sparepart</th>
                    <th scope="col">Kuantitas</th>
                    <th scope="col">Harga Satuan</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($sparepart as $i=>$part)
                  <tr>
                    <th scope="row">{{ $i+1 }}</th>
                    <td>{{ $part->nm_sparepart }}</td>
                    <td>{{ $part->kuantitas }}</td>
                    <td>{{ $part->harga }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Buat Detail</button>
            </div>
          </form>
    </div>
@endsection
@section('script')
    
@endsection