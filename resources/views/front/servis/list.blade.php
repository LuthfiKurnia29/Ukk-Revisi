@extends('front.layouts.main')

@section('container')
    <div class="container">
        <table class="table mt-5 mb-5">
            <thead>
              <tr class="table table-warning">
                <th scope="col">No</th>
                <th scope="col">Kendala</th>
                <th scope="col">Merk</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $i=>$booking)
              <tr>
                <th scope="row">{{ $i+1 }}</th>
                <td>
                    @foreach ($booking->kendalas as $kendala)
                       <li> {{ $kendala->nm_kendala }}</li>
                    @endforeach
                </td>
                <td>
                    @foreach ($booking->merks as $merk)
                      <li>{{ $merk->nm_merk }}</li>
                    @endforeach
                </td>
                <td>{{ $booking->jumlah_barang }}</td>
                <td>
                    <a href="/list-servis/{{ $booking->id }}" type="button" class="btn btn-success">Detail</a>
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>
    </div>
@endsection