@extends('admin.layouts.main')
@section('container')
    <div class="container mt-5">
        <h3 class="text-center">Data Bank</h3>
        <a href="/tambah-bank" type="button" class="btn btn-outline-danger">Tambah Bank</a>
        <div class="card">
        <table class="table">
            <thead>
              <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Logo</th>
                <th scope="col">Nama Bank</th>
                <th scope="col">No. Rekening</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($banks as $i=>$bank)
                <tr class="text-center">
                  <th scope="row">{{ $i+1 }}</th>
                  <td><img src="{{ asset('storage/' . $bank->logo) }}" alt="" width="100"/></td>
                  <td>{{ $bank->nm_bank }}</td>
                  <td>{{ $bank->no_rekening }}</td>
                  <td class="justify-content-center">
                    <a href="" type="button" class="btn btn-outline-warning">Edit</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
@endsection
@section('script')
    <script>
        
    </script>
@endsection