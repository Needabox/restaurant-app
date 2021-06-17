<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::all();
        $transaksi = Transaksi::all();
        
        return view('transaksi.index', compact('pesanan', 'transaksi'));
    }

    public function show()
    {
        $pesanan = Pesanan::all();
        $transaksi = Transaksi::all();
        
        return view('transaksi.index2', compact('pesanan', 'transaksi'));
    }

    public function edit($id)
    {
        $pesanan = Pesanan::find($id);
        
        foreach ($pesanan->menu as $m) {
            $harga[] = $m->harga;
        }

        $total = array_sum($harga);

        return view('transaksi.edit', ['pesanan' => $pesanan, 'total' => $total]);
    }

    public function update(Request $request,$id, Pesanan $pesanan, Transaksi $transaksi)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->bayar = $request->bayar;
        $transaksi->status = true;
        $transaksi->save();
        
        $pesanan = Pesanan::find($id);
        $pesanan->status = true;
        $pesanan->save();
        
        foreach ($pesanan->menu as $m) {
            $harga[] = $m->harga;
        }

        $total = array_sum($harga);

        if ($request->bayar < $total ) {
            return redirect()
                    ->route('transaksi.edit', ['id' => $pesanan->id])
                    ->with('message', __('messages.fail'));
        }
            return redirect()
                ->route('transaksi')
                ->with('message', __('messages.success'));
    }
}
