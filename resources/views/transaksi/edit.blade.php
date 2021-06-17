@extends('layouts.master')
@section('content')
<div class="container">
    <div class="card mt-2">
        <div class="card-body">
            <div class="container">
                <form action="{{ route('transaksi.update', ['id' => $pesanan->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="d-block">Nama Menu</label>
                                    @if(session()->has('message'))
                                    <div class="alert alert-danger">
                                        <strong>{{ session()->get('message') }}</strong>
                                        <button class="close" type="button" data-dismiss="alert">
                                            <span>&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                </div>
                                <table class="table">
                                    <thead class="table-hover">
                                        <tr>
                                            <th scope="col">Nama Pelanggan</th>
                                            <th scope="col">Menu yang dipesan</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $pesanan->pelanggan->nama_pelanggan }}</td>
                                            <td>
                                                <ol class="pl-4">
                                                    @foreach ($pesanan->menu as $menu)
                                                        <li class="ml-0">{{ $menu->nama_menu }}</li>
                                                    @endforeach
                                                </ol>
                                            </td>
                                            <td>Rp. {{ number_format($total) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="form-group">
                                    <label for="bayar">Uang Pembayaran</label>
                                    <input type="number" name="bayar" class="form-control col-3">
                                </div>
                                <button type="submit" class="btn btn-primary">Bayar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection