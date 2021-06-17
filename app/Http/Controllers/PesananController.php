<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pesanan;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::simplePaginate(10);

        return view('pesanan.index', ['pesanan' => $pesanan]);
    }

    public function show()
    {
        $pesanan = Pesanan::simplePaginate(10);

        return view('pesanan.index2', ['pesanan' => $pesanan]);
    }

    public function create()
    {
        $menu = Menu::all();
        $pelanggan = Pelanggan::all();

        return view('pesanan.form', compact('menu', 'pelanggan'));
    }

    public function store(Request $request){
        // dd(Auth::user()->id);
        $pelanggan = Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
        ]);

        $pesanan = Pesanan::create([
            'id_pelanggan' => $pelanggan->id,
            'jumlah' => count($request->menu_id),
            'id_user' => Auth::user()->id,
            'status' => '0',
            ]);
        $pesanan->menu()->attach($request->menu_id);

        foreach ($pesanan->menu as $m) {
            $harga[] = $m->harga;
        }

        $total = array_sum($harga);

        $transaksi = Transaksi::create([
            'id_pesanan' => $pesanan->id,
            'total' => $total,
            'status' => '0',
        ]);

        return redirect()
            ->route('pesanan')
            ->with('message', __('messages.create'));
    }
}
