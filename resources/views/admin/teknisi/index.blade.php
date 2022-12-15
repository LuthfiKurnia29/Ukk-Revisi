@extends('admin.layouts.index')
@section('container')
    <div class="container mt-5">
        <a href="/tambah-teknisi" type="button" class="btn btn-success m-3">Tambah Teknisi</a>
        <table class="table table-info">
            <thead>
              <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($teknisis as $i=>$teknisi)
                <tr class="text-center">
                  <th scope="row">{{ $i+1 }}</th>
                  <td><img src="{{ asset('storage/' . $teknisi->foto) }}" class="img-fluid" width="200" alt=""></td>
                  <td>{{ $teknisi->nama_teknisi }}</td>
                  <td>{{ $teknisi->no_telepon }}</td>
                  <td>{{ $teknisi->alamat }}</td>
                  <td>
                    <div class="d-flex justify-content-center">
                    <a href="/teknisi/{{ $teknisi->id }}/edit" type="button" class="btn btn-warning" style="margin-right: 2em">Edit</a>
                    <form action="/teknisi/{{ $teknisi->id }}" method="POST">
                      @method('DELETE')
                      @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    </div>  
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection