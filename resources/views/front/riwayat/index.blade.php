@extends('front.layouts.main')
@section('container')
    <div class="container mt-5 p-2">
        <h3 class="fw-bold text-center">Riwayat Servis</h3>
        <table class="table">
            <thead class="text-center">
              <tr>
                <th scope="col">No. Invoice</th>
                <th scope="col">Tanggal Servis</th>
                <th scope="col">Barang</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($riwayats as $n=>$riwayat) 
                <tr>
                  <td>{{ $riwayat->no_invoice }}</td>
                  <td>{{ Carbon\Carbon::parse($riwayat->transaksi->servis->booking->tanggal_booking)->format('H:i, d-M-Y') }}</td>
                  <td>
                    @foreach ($riwayat->transaksi->servis->booking->merks as $merk)
                       <li> {{ $merk->nm_merk }} </li>
                    @endforeach
                  </td>
                  <td>Rp. {{ number_format($riwayat->total_harga + $riwayat->transaksi->servis->booking->kecamatan->hrg_ongkir + $last_digit) }}</td>
                  <td>
                    @if ($riwayat->transaksi->servis->status == 'Menunggu Pembayaran')
                      <span class="badge bg-warning">{{ $riwayat->transaksi->servis->status }}</span>
                    @elseif($riwayat->transaksi->servis->status == 'Sedang Dikerjakan')
                    <span class="badge bg-danger">{{ $riwayat->transaksi->servis->status }}</span>
                    @else()
                    <span class="badge bg-success">{{ $riwayat->transaksi->servis->status }}</span>
                    @endif
                  </td>
                  <td class="d-flex justify-content-center">
                    {{-- <a href="/riwayat-servis/{{ $riwayat->id }}/detail" type="button" class="btn btn-outline-warning" style="margin-right: 2em">Lihat Detail</a> --}}
                    @if ($riwayat->transaksi->servis->status == 'Selesai')
                    <a href="/riwayat-servis/{{ $riwayat->id }}/cetak-pdf" type="button" class="btn btn-outline-danger"><i class="bi bi-download"></i>  PDF</a>
                    @endif
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection