@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-11">
                        Ubah Menu
                    </div>
                    <div class="col-md-1 right">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus">
                            <i class="fa fa-trash-o fa-fw"></i>
                          </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
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
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ $menu->getAvatar()}}" class="card-img-top">
                    </div>
                    <div class="col-md-7">
                        <form class="mt-3" action=" {{ route('menu.update', ['id' => $menu->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama_menu">Nama Menu</label>
                                <input name="nama_menu" id="nama_menu" type="text" class="form-control" value="{{ $menu->nama_menu}}">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input name="harga" id="harga" type="text" class="form-control" value="{{ $menu->harga}}">
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" name="gambar" id="gambar" class="form-control">
                            </div>
                            <div class="form-group mb-0">
                                <a href="{{ route('menu') }}" class="btn btn-primary btn-sm">Kembali</a>
                                <button type="submit" class="btn btn-success btn-sm">Update</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Menu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Yakin hapus menu enak <strong>{{ $menu->nama_menu }}</strong>?
        </div>
        <div class="modal-footer">
          <a href="{{ route('menu.hapus', ['id' => $menu->id]) }}" type="button" class="btn btn-danger"><i class="fa fa-trash-o fa-fw"></i>Hapus</a>
        </div>
      </div>
    </div>
  </div>
@endsection