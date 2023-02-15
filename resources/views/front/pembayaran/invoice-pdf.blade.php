<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesanan {{ auth()->user()->name }}</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 14px;
            color: #333;
            line-height: 1.4;
        }

        table {
            width: 100%;
        }

        table.main td {
            padding: 0.25rem 0.5rem;
            vertical-align: start;
        }

        .text-end {
            text-align: right;
        }
    </style>
</head>

<body>
    <table cellspacing="0" border="0" cellpadding="0">
        <tr>
            <td>
                <img src="front/img/logo.png" width="200" alt="">
            </td>
            <td>
                <h3 class="text-end"># {{ $laporan->no_invoice }}</h3>
            </td>
        </tr>
    </table>

    {{-- <div>{{ $setting->nm_perusahaan }}</div> --}}
        <table>
            <tr>
                <td>
                    <div>Dipesan Kepada:</div>
                    <h4 style="margin: 0">{{ $laporan->transaksi->servis->booking->user->name }}</h4>
                    <h4 style="margin: 0">{{ $laporan->transaksi->servis->booking->user->no_telepon }}</h4>
                </td>
                <td>
                    <div>Alamat : </div>
                    <h4 style="margin: 0">{{ $laporan->transaksi->servis->booking->alamat_lengkap }}</h4>
                    <h4 style="margin: 0">{{ $laporan->transaksi->servis->booking->kecamatan->nm_kecamatan }}, {{ $laporan->transaksi->servis->booking->kota->nm_kota }}</h4>
                </td>
            </tr>
        </table>
    <table>
        <tr>
            <td>
                <div style="margin: 2rem 0">
                    <div>Kerusakan yang dialami</div>
                    <div>
                        @foreach ($laporan->transaksi->servis->booking->kendalas as $kendala)
                        <strong>{{ $kendala->nm_kendala }}</strong>
                        @endforeach
                    </div>
                </div>
            </td>
            <td>
                <div style="margin: 2rem 0">
                    <div>Kendala Lain : </div>
                    <div>
                        @if (isset($laporan->transaksi->servis->booking->catatan))
                        <strong>{{ $laporan->transaksi->servis->booking->catatan }}</strong>
                        @else
                        <strong>-</strong>
                        @endif
                    </div>
                </div>
            </td>
            <td>
                <div style="margin: 2rem 0">
                    <div>Teknisi yang menangani : </div>
                    <div>
                        <strong>{{ $laporan->transaksi->servis->teknisi->nama_teknisi }}</strong>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    {{-- <div style="margin-bottom: 3rem">
        <div>Total Tagihan:</div>
        <h2 style="margin-top: 0"> Rp. {{ number_format($laporan->total_harga, 0, ',', '.') }}
        </h2>
        <div>Metode Pembayaran: <strong>{{ $checkout->metode_pembayaran_text }}</strong></div>
    </div> --}}

    <div>
        <div style="margin-bottom: 1rem">Rincian harga servis:</div>
        <div>
            <table class="main" border="1" cellspacing="0">
                <thead>
                    <tr>
                        <th style="min-width: 300px">Produk</th>
                        <th>Harga</th>
                        <th>Kuantitas</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>
                                <div>
                                    <strong>
                                        @foreach ($sparepart as $part)
                                            <li style="list-style: none">{{ $part->nm_sparepart }}</li>
                                        @endforeach
                                    </strong>
                                </div>
                            </td>
                            <td class="text-end">
                                @foreach ($sparepart as $part)
                                <li style="list-style: none"> <span> Rp. {{ number_format($part->harga, 0, ',', '.') }}</span></li>
                                @endforeach
                            </td>
                            <td class="text-end">
                                @foreach ($sparepart as $part)
                                <li style="list-style: none"><span>{{ $part->kuantitas }}</span></li>
                                @endforeach
                            </td>
                            <td class="text-end">
                                <span>
                                    @foreach ($sparepart as $part)
                                    <li style="list-style: none"> Rp. {{ number_format(@$ttl = $part->total, 0, ',', '.') }}</li>
                                    @endforeach
                                </span>
                                <br><br>
                                <span>Biaya Servis : Rp. 
                                    {{ number_format($servis = $laporan->transaksi->servis->harga, 0, ',', '.') }}
                                </span>
                                <br><br>
                                <span>Kode Unik : 
                                    {{ $last_digit }}
                                </span>
                                <br><br>
                                <span>Ongkir : Rp.
                                    {{ number_format($ongkir = $laporan->transaksi->servis->booking->kecamatan->hrg_ongkir, 0, ',', '.') }}
                                </span>
                            </td>
                        </tr>
                    <tr>
                        <td colspan="3" class="text-end">Total Belanja</td>
                        <td class="text-end">
                                <h3 style="margin: 0"> Rp. {{ number_format(@$sparepart->sum('total') + $servis + $ongkir + $last_digit, 0, ',', '.') }}
                            </h3>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div style="margin-top: 3em">
        <div>Keterangan Teknisi : </div>
        <p>{{ $laporan->transaksi->servis->keterangan_teknisi }}</p>
    </div>
    <section style="margin-top: 3em">
        <div style="text-align: center; background-color:darkgray; color:rgb(8, 8, 8)">Status Pembayaran</div>
        <h2 style="text-align: center; margin-top:0;background-color:rgb(6, 10, 2);color:white">{{ $laporan->transaksi->servis->status }}</h2>
    </section>
</body>

</html>