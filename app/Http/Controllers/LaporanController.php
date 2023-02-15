<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use App\Models\Pembayaran;
use App\Models\DetailServis;
use Illuminate\Http\Request;
use App\Models\BeliSparePart;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function cetak($id){
        $laporan = Transaksi::with(['servis', 'pembayaran'])->where('detail_id', $id)->whereHas('pembayaran')->first();
        $sparepart = BeliSparePart::with(['booking'])->where('booking_id', $id)->get();
        $last_digit = substr($laporan->servis->booking->user->no_telepon, -3);
        // dd($laporan);
        $pdf = PDF::loadview('admin.laporan.laporan-pdf',[
            'title' => 'Laporan Admin',
            'laporan' => $laporan,
            'sparepart' => $sparepart,
            'last_digit' => $last_digit
        ]);
    	return $pdf->stream();
    }
}
