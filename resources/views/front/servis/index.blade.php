@extends('front.layouts.main')
@section('container')
<section>
    <div class="container p-8" style="margin-top: 3em; margin-bottom:3em">
        <div class="card">
            <div class="card-header text-center">Booking Servis</div>
            <div class="card-body">
                <form action="/booking" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Apa Kendalamu?</label>
                            @foreach ($kendalas as $kendala)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $kendala->id }}" name="kendala_id[]">
                                <label class="form-check-label" for="flexCheckDefault">
                                  {{ $kendala->nm_kendala }}
                                </label>
                              </div>
                            @endforeach
                    </div>
                    <div class="row row-space mb-3">
                        <div class="col-6">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Servis</label>
                        <input type="date" class="form-control" name="tanggal_booking" id="">
                      </div>
                      <div class="col-6">
                        <label for="exampleInputEmail1" class="form-label">Jumlah Barang</label>
                        <input type="text" class="form-control" name="jumlah_barang" id="">
                      </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pilih Merk</label>
                            @foreach ($merks as $merk)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $merk->id }}" name="merk_id[]">
                                <label class="form-check-label" for="flexCheckDefault">
                                 {{ $merk->nm_merk }}
                                </label>
                              </div>
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
                                <option selected>Pilih Kecamatan</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            <label for="" class="form-label">Alamat Lengkap</label>
                            <input type="text" name="alamat_lengkap" id="" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success m-3">Booking Sekarang</button>
                </form> 
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
     <script>
        document.querySelector('.select-kota').addEventListener('change', function(ev) {
            $.ajax({
                url: '/kecamatan/' + this.value,
                success: function(data) {
                    document.querySelector('.select-kecamatan').innerHTML = data.map(item => (`<option value="${item.id}">${item.nm_kecamatan}</option>`)).join('');
                    document.querySelector('.select-kecamatan').classList.remove('d-none');
                }
            })
        });
    </script>
@endsection