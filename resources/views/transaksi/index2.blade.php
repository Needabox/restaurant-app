@extends('layouts.master')
@section('content')
<div class="container">
    <div class="card mt-2">
        <div class="card-body mt-2">
            <div class="card-header">
                <h3>Transaksi</h3>
            </div>
                @if(session()->has('message'))
                <div class="alert alert-success mt-2">
                    <strong>{{ session()->get('message') }}</strong>
                    <button class="close" type="button" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                </div>
                @endif
                <a href="{{ route('transaksi') }}" class="btn btn-primary mt-2">Daftar Transaksi</a>
            <table class="table table-hover mt-2">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($pesanan as $p)
                    @if ($p->status == 1)
                    <tr>
                        <td scope="row"> {{$loop->iteration}}</td>
                        <td>{{ $p->pelanggan->nama_pelanggan}}</td>
                        <td>     
                            @foreach ($p->menu as $menu)
                                <li>{{ $menu->nama_menu }}</li>
                            @endforeach
                        </td>
                        <td>{{ $p->created_at}}</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection