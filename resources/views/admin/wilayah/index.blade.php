@extends('admin.layouts.main')
@section('container')
    <div class="container">
        <h3 class="text-center">Data Wilayah</h3>
        <a href="/tambah-kota" type="button" class="btn btn-outline-danger">Tambah Kota</a>
        <div class="card p-4">
            @foreach ($kotas as $kota)    
            <div class="accordion accordion-flush" id="accordion-{{ $kota->id }}">
                <div class="accordion-item">
                  <h2 class="accordion-header d-flex" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-{{ $kota->id }}" aria-expanded="false" aria-controls="flush-{{ $kota->id }}">
                        {{ $kota->nm_kota }}
                    </button>
                    <form action="/data-wilayah/kota/{{ $kota->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">Hapus Kota</button>
                    </form>
                  </h2>
                  <div id="flush-{{ $kota->id }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordion-{{ $kota->id }}">
                    <div class="accordion-body">
                    <a href="/data-wilayah/tambah-kecamatan/{{ $kota->id }}" type="button" class="btn btn-sm btn-outline-danger">Tambah Kecamatan</a>
                    <div class="card p-4">
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">Nama Kecamatan</th>
                                    <th scope="col">Harga Ongkir</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kota->kecamatan as $kecamatan)
                              <tr class="text-center">
                                <th scope="row">{{ $kecamatan->nm_kecamatan }}</th>
                                <td>{{ number_format($kecamatan->hrg_ongkir) }}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="" type="button" class="btn btn-outline-warning">Ubah</a>
                                    <form action="/daftar-kecamatan/{{ $kecamatan->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                    </form>
                                </td>
                              </tr>
                            @endforeach
                            </tbody>
                          </table>
                    </div>
                    </div>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection