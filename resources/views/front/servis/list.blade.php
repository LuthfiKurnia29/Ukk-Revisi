@extends('front.layouts.main')

@section('container')
    <div class="container">
        <table class="table mt-5 mb-5">
            <thead>
              <tr class="table table-info text-center">
                <th scope="col">Merk</th>
                <th scope="col">Waktu Booking</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                @if (@$booking->detail->status == 'Selesai')
                    
                @else
                <tr class="text-center">
                  <td>
                      @foreach ($booking->merks as $merk)
                        <li>{{ $merk->nm_merk }}</li>
                      @endforeach
                  </td>
                  <td>{{ Carbon\Carbon::parse($booking->tanggal_booking)->format('H:i, d-M-Y') }}</td>
                  <td class="d-flex justify-content-center">
                    @if (@$booking->detail->status == 'Sedang Dikerjakan' || @$booking->detail->status == 'Menunggu Pembayaran' || @$booking->detail->status == 'Selesai')
                    <form action="/batal-pesan/{{ $booking->id }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-outline-danger d-none">
                        Batal
                      </button>
                    </form>
                    @else 
                      <button type="submit" class="btn btn-outline-danger hapus" data-id="{{ $booking->id }}">
                        Batal
                      </button>
                    @endif
                    @if (isset($booking->detail))    
                    <a href="/list-servis/{{ $booking->id }}" type="button" class="btn btn-success">Detail</a>
                    @endif
                  </td>
                </tr>
                @endif
            </tbody>
            @endforeach
          </table>
        <h5 class="fw-bold mb-4">* Detail akan muncul ketika permintaan sudah ditinjau teknisi kami</h5>
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
                  url: '{{ url('/batal-pesan') }}/' + id,
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