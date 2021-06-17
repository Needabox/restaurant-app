@extends('layouts.master')
@section('content')
        <div class="container">
            <div class="card mt-2">
                <div class="card-header">
                    <h3>Menu</h3>
                </div>
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">+ Tambah Menu</button>
                            </div>
                            <div class="col-md-4 right">
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" size="27" name="q" value="{{ $request['q'] ?? ''}}" placeholder="Cari Menu Impianmu Yuk!">
                                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </div>

                    <div class="mt-2">
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            <strong>{{ session()->get('message') }}</strong>
                            <button class="close" type="button" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                        </div>
                        @endif
                    </div>

                    <div class="row justify-content-center">
                        @foreach($menu as $m)
                        <div class="col-md-4 mt-4">
                            <div class="card">
                              <img src="{{ url('storage/images') }}/{{ $m->gambar }}" class="card-img-top" height="350" width="350">
                              <div class="card-body">     
                                <h5 class="card-title">{{ $m->nama_menu }} <a href="{{ route('menu.edit', ['id' => $m->id]) }}" style="color: black"><i class="fa fa-pencil fa-fw "></i></a></h5>    
                                <p class="card-text">
                                    Harga : <strong>Rp. {{ number_format($m->harga)}}</strong> <br>
                                </p>
                              </div>
                            </div> 
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{ $menu->appends($request)->links() }}
            
<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form -->
                <form action=" {{ route('menu.tambah') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('nama_menu') ? 'has-error' : '' }}">
                        <label for="nama_menu">Nama Menu</label>
                        <input name="nama_menu" id="nama_menu" type="text" class="form-control" placeholder="Masukan nama menu" value="{{ old('nama_menu') }}">
                        @if($errors->has('nama_menu'))
                        <span class="text-danger">{{ $errors->first('nama_menu') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('harga') ? 'has-error' : '' }}">
                        <label for="harga">Harga</label>
                        <input name="harga" id="harga" type="text" class="form-control" placeholder="Masukan Harga" value="{{ old('harga') }}">
                        @if($errors->has('harga'))
                        <span class="text-danger">{{ $errors->first('harga') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('gambar') ? 'has-error' : '' }}">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control">
                        @if($errors->has('gambar'))
                        <span class="text-danger">{{ $errors->first('gambar') }}</span>
                        @endif
                    </div>    
                </div>
                <div class="alert alert-warning">
                    Gambar harus ukuran 3x3
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection