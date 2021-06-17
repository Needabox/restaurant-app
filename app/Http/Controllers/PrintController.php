<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use App\Models\Pesanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function printtransaksi()
    {
        $pesanan = Pesanan::all();
        $transaksi = Transaksi::all();
        $tanggal = Carbon::now()->format('l, d F Y');
        $pemilik = "MUHAMMAD RAFLI";
        
        $data = ['pesanan' => $pesanan, 'transaksi' => $transaksi, 'pemilik' => $pemilik, 'tanggal'=> $tanggal];

        $pdf = PDF::loadview('print/transaksiprint' , $data)->setPaper('A4','potrait');
        return $pdf->stream();
    }
}
