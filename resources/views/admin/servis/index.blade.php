@extends('admin.layouts.index')
@section('container')
    <div class="container">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama User</th>
      <th scope="col">Kendala</th>
      <th scope="col">Jumlah Barang</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($bookings as $i=>$booking)    
    <tr>
      <th scope="row">{{ $i+1 }}</th>
      <td>{{ $booking->user->name }}</td>
      <td>
        @foreach($booking->kendalas as $kendala)
           <li>{{ $kendala->nm_kendala }}</li>
        @endforeach
      </td>
      <td>{{ $booking->jumlah_barang }}</td>
      <td>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-detail-{{ $booking->id }}">
          Detail Data
       </button>
       <!-- Modal -->
       <div class="modal fade" id="modal-detail-{{ $booking->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg bg-white text-black">
           <div class="modal-content">
                     <div class="modal-header">
                     <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Servis Detail</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                       <div class="modal-body text-dark">
                                 <form class="row g-3" action="/servis-dashboard/{{ $booking->id }}" method="POST">
                                   @csrf
                                     <div class="col-md-4">
                                       <label for="inputEmail4" class="form-label">Nama Pemilik</label>
                                       <input type="text" class="form-control bg-white" name="user_id" value="{{ $booking->user->name }}" readonly>
                                     </div>
                                     <div class="col-md-4">
                                      <label for="inputEmail4" class="form-label">Merk Barang</label>
                                      @foreach ($booking->merks as $merk)  
                                      <input type="text" class="form-control bg-white" name="merk_id" value="{{ $merk->nm_merk }}" readonly>
                                      @endforeach
                                    </div>
                                    <div class="col-md-4">
                                      <label for="inputEmail4" class="form-label">Jumlah Barang</label>  
                                      <input type="text" class="form-control bg-white" name="jumlah_barang" value="{{ $booking->jumlah_barang }}" readonly>
                                    </div>
                                      <div class="col-md-12">
                                        <label for="" class="form-label">Kendala</label>
                                        @foreach ($booking->kendalas as $kendala)
                                            <input type="text" name="kendala_id" class="form-control mb-3 bg-white" value="{{ $kendala->nm_kendala }}" id="" readonly>
                                        @endforeach
                                      </div>
                                      <div class="row row-space">
                                        <div class="col-6">
                                          <label for="" class="form-label">Tanggal Booking</label>
                                          <input type="date" name="tanggal_booking" class="form-control bg-white" value="{{ $booking->tanggal_booking }}" id="" readonly>
                                        </div>
                                        <div class="col-6">
                                          <label for="" class="form-label">Estimasi Selesai</label>
                                          <input type="date" name="estimasi_selesai" class="form-control bg-white" value="{{ @$booking->detail->estimasi_selesai }}" id="">
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <label for="" class="form-label">Teknisi</label>
                                        <select class="form-select bg-white" name="teknisi_id" aria-label="Default select example">
                                         @foreach ($KOMTOL as $teknisi)
                                             <option value="{{ $teknisi->id }}">{{ $teknisi->nama_teknisi }}</option>
                                         @endforeach
                                        </select>
                                      </div>
                                      <div class="col-md-12">
                                        <label for="" class="form-label">Penjelasan Teknisi</label>
                                        <input type="text" name="keterangan_teknisi" class="form-control bg-white" value="{{ @$booking->detail->keterangan_teknisi }}" id="">
                                      </div>
                                      <div class="col-md-6">
                                        <label for="" class="form-label">Total Harga</label>
                                        <input type="number" name="total" class="form-control bg-white" value="{{ @$booking->detail->harga }}" id="">
                                      </div>
                                      <div class="col-md-6">
                                        <label for="status" class="form-label">Status</label>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="statusdikerjakan" value="diproses" {{ @$booking->detail->status === 'diproses' ? 'checked' : ''}}>
                                                <label class="form-check-label" for="statusdikerjakan">
                                                  Diproses
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="menunggu_pembayaran" value="menunggu_pembayaran"{{ @$booking->detail->status === 'menunggu_pembayaran' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="menunggu_pembayaran">
                                                  Selesai
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="selesai" value="selesai"{{ @$booking->detail->status === 'selesai' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="Selesai">
                                                  Selesai
                                                </label>
                                      </div>
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-primary">Save changes</button>
                                   </form>
                                 </div>
             </div>
           </div>
         </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
@endsection