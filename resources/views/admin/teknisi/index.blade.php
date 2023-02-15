@extends('admin.layouts.main')
@section('container')
    <div class="container mt-5">
        <h3 class="text-center">Daftar Teknisi</h3>
        <a href="/tambah-teknisi" type="button" class="btn btn-outline-success">Tambah Teknisi</a>
        <div class="card">
        <table class="table mt-4">
            <thead>
              <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Foto Teknisi</th>
                <th scope="col">Nama</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($teknisis as $i=>$teknisi)    
                <tr class="text-center">
                  <th scope="row">{{ $i+1 }}</th>
                  <td><img src="{{ asset('storage/' . $teknisi->foto) }}" width="100" alt=""></td>
                  <td>{{ $teknisi->nama_teknisi }}</td>
                  <td>{{ $teknisi->no_telepon }}</td>
                  <td class="d-flex justify-content-center">
                    <a href="" type="button" class="btn btn-outline-warning">Edit</a>
                    <button type="submit" class="btn btn-outline-danger hapus" data-id="{{ $teknisi->id }}">Hapus</button>
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
       $('table').on('click', '.hapus', function() {
      var id = $(this).data('id')
      Swal.fire({
      title: 'Yakin Membatalkan Servis?',
      showCancelButton: true,
      confirmButtonText: 'Hapus',
      preConfirm: () => {
              return $.ajax({
                  url: '{{ url('/teknisi') }}/' + id,
                  method: 'POST',
                  headers: {
                      'X-CSRF-TOKEN': '{{ @csrf_token() }}'
                  },
                  data: {
                      _method: 'DELETE'
                  },
                  error: function() {
                      Swal.showValidationMessage('Gagal menghapus data')
                  }
              });
          }
      }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      setTimeout(() => {
        window.location.reload();
      }, 500);
      if (result.isConfirmed) {
        Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
      } else if (result.isDenied) {
          Swal.fire('Changes are not saved', '', 'info')
      }
      })
  });
    </script>
@endsection