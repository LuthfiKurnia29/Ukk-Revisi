@extends('admin.layouts.index')
@section('container')
     <div class="container">
       <table class="table mt-5">
         <h3 class="text-center mt-5">Data Bank</h3>
         <a href="/tambah-bank" type="button" class="btn btn-success mb-0">Tambah Bank</a>
         <thead class="table-info">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Logo</th>
                <th scope="col">Bank</th>
                <th scope="col">Kode Bank</th>
                <th scope="col">Rekening</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody class="table-success">
                @foreach ($banks as $i=>$bank)
                <tr>
                  <th scope="row">{{ $i+1 }}</th>
                  <td><img src="{{ asset('storage/' . $bank->logo) }}" class="img-fluid" width="150" alt=""></td>
                  <td>{{ $bank->nm_bank }}</td>
                  <td>{{ $bank->kd_bank }}</td>
                  <td>{{ $bank->no_rekening }}</td>
                  <td>

                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
     </div>
@endsection
