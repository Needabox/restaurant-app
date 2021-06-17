@extends('layouts.master')
@section('content')
<div class="container">
  <div class="card mt-2">
      <div class="card-header">
          <h3>Pesanan</h3>
      </div>
      @if(session()->has('message'))
      <div class="alert alert-success">
          <strong>{{ session()->get('message') }}</strong>
          <button class="close" type="button" data-dismiss="alert">
              <span>&times;</span>
          </button>
      </div>
      @endif
      <div class="card-body">
        <a href="{{ route('tambah.pesanan') }}" class="btn btn-primary">+ Tambah Pesanan</a>
        <a href="{{ route('pesanan.selesai') }}" class="btn btn-outline-success">Pesanan Selesai</a>
        <table class="table table-hover mt-2">
          <thead>
            <tr>
              <th>No</th>
              <th scope="col">Pelanggan</th>
              <th scope="col">Menu</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Waiter</th>
              <th scope="col">Tanggal</th>
            </tr>
          </thead>
              <tbody>
                @foreach ($pesanan as $p)
                @if ($p->status == 0)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $p->pelanggan->nama_pelanggan }}</td>
                      <td>
                        @foreach ($p->menu as $menu)
                            <li>{{ $menu->nama_menu }}</li>
                        @endforeach
                      </td>
                      <td>{{ $p->jumlah }}</td>
                      <td>{{$p->user->name}}</td>
                      <td>{{ $p->created_at}}</td>
                  </tr>
                  @endif
                  @endforeach 
              </tbody>
        </table>
      </div>
  </div>
  {{ $pesanan->links() }}
</div>
@endsection