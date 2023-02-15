@extends('front.layouts.main')
@section('container')
<section>
    <div class="container p-8" style="margin-top: 2em; margin-bottom:3em">
        @if (session('gagal'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
                {{ session('gagal') }}
              </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <h3 class="text-center">Booking Servis</h3>
        <div class="card">
            <div class="card-body">
                <form action="/booking" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Apa Kendalamu?</label>
                        <select class="js-example-basic-multiple form-control" name="kendala_id[]P" multiple="multiple">
                        @foreach ($kendalas as $kendala)
                                <option value="{{ $kendala->id }}">{{ $kendala->nm_kendala }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="row row-space mb-3">
                        <div class="col-12">
                        <label for="exampleInputEmail1" class="form-label">Waktu Servis</label>
                        <input type="text" class="waktu form-control" name="tanggal_booking">
                      </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pilih Merk</label>
                        <select class="merk form-control" name="merk_id[]" multiple="multiple">
                            @foreach ($merks as $merk)
                                    <option value="{{ $merk->id }}">{{ $merk->nm_merk }}</option>
                            @endforeach
                            </select>
                    </div>
                    <div class="row row-space">
                        <div class="col-6">
                            <label for="exampleFormControlInput1" class="form-label">Kota Mana?</label>
                            <select class=" form-select form-select select-kota" name="kota_id" aria-label="Default select example">
                                <option selected>Pilih Kota</option>
                                @foreach ($kotas as $kota)
                                <option value="{{ $kota->id }}">{{ $kota->nm_kota }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="exampleFormControlInput1" class="form-label">Pilih Kecamatan</label>
                            <select class="form-select form-select select-kecamatan" name="kecamatan_id" aria-label="Default select example">
                                <option>Pilih Kecamatan</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            <label for="" class="form-label">Alamat Lengkap</label>
                            <input type="text" name="alamat_lengkap" id="" value="{{ auth()->user()->alamat }}" class="form-control" autocomplete="off">
                        </div>
                        <div class="col-12 mt-3">
                            <label for="" class="form-label">Kendala Lain (Opsional jika tidak ada diatas)</label>
                            <textarea name="catatan" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button id="booking-btn" type="submit" class="btn btn-success mt-4">Booking Sekarang</button>
                    </div>
                </form> 
            </div>
        </div>
     
    </div>
</section>
@endsection

@section('script')
     <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
        $(document).ready(function() {
            $('.merk').select2();
        });
        document.querySelector('.select-kota').addEventListener('change', function(ev) {
            $.ajax({
                url: '/kecamatan/' + this.value,
                success: function(data) {
                    document.querySelector('.select-kecamatan').innerHTML = data.map(item => (`<option value="${item.id}">${item.nm_kecamatan}</option>`)).join('');
                    document.querySelector('.select-kecamatan').classList.remove('d-none');
                }
            })
        });
        $(".waktu").flatpickr(
            {
                minDate: "today",
                maxDate: new Date().fp_incr(7),
                enableTime: true,
                dateFormat: "Y-m-d H:i",
                minTime: "09.00",
                maxTime: "16.00",
            }
        );

     
    </script>
    
@endsection