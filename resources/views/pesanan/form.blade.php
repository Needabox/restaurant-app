@extends('layouts.master')
@section('content')
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
</head>
    <div class="container">
        <div class="card mt-2">
            <div class="card-body">
                <form action=" {{ route('tambah.store.pesanan') }}" method="POST" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="menu">Nama Menu</label>
                        <select type="text" multiple id="nama_menu" name="menu_id[]" aria-describedby="emailHelp" class="selectpicker" multiple>
                            @foreach ($menu as $m)
                            <option value="{{ $m->id }}">{{ $m->nama_menu }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    {{-- <div class="form-group">
                        <label for="pelanggan">Nama Pelanggan</label>
                        <select id="pelanggan" name="pelanggan_id" class="form-control">
                            @foreach ($pelanggan as $p)
                            <option value="{{ $p->id }}">{{ $p->nama_pelanggan }}</option>
                            @endforeach
                        </select>
                    </div>  --}}
                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input name="nama_pelanggan" id="nama_pelanggan" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin">
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="nohp">Nomor Handphone</label>
                        <input name="nohp" id="nohp" type="number" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" type="text" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Buat Pesanan</button>
                </form>
            </div>
        </div>
    </div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
@endsection