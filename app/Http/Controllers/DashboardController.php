<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use App\Models\Pesanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $welcome = "WELCOME TO PLOYRESTO";
        
        $menu = Menu::all();
        $pesanan = Pesanan::all();
        $transaksi = Transaksi::all();
        $users = User::all();
        return view('dashboard.index', ['welcome' => $welcome , 'menu' => $menu, 'pesanan' => $pesanan, 'transaksi' => $transaksi, 'users' => $users]);
    }
}
