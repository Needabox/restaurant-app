@extends('layouts.master')
@section('content')
<div class="container">
    <div class="card mt-2">
        <div class="card-header">
            <div class="row">
                <div class="col-md-11">
                    <h4>Ubah User</h4>
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
            <form class="mt-3" action=" {{ route('update.user', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Role</label>
                    <select class="form-control" name="role">
                        <option value="admin">admin</option>
                        <option value="waiter">waiter</option>
                        <option value="cashier">cashier</option>
                        <option value="owner">owner</option>
                      </select>
                        @error('role')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Nama User</label>
                    <input name="name" id="name" type="text" class="form-control" value="{{ $user->name}}">
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" id="email" type="email" class="form-control" value="{{ $user->email}}">
                </div>
                
                <div class="form-group mb-0">
                    <a href="{{ route('users') }}" class="btn btn-primary btn-sm">Kembali</a>
                    <button type="submit" class="btn btn-success btn-sm">Update</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Hapus User <strong>{{ $user->name}}</strong>?
        </div>
        <div class="modal-footer">
          <a href="{{ route('hapus.user', ['id' => $user->id]) }}" type="button" class="btn btn-danger"><i class="fa fa-trash-o fa-fw"></i>Hapus</a>
        </div>
      </div>
    </div>
  </div>
@endsection