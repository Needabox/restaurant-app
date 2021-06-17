@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card mt-2">
            <div class="card-header">
                <h3>Users</h3>
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
                    <div class="col-md-8">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahuser">
                            + Tambah User
                        </button>
                    </div>
                    <div class="col-md-4 right">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" size="27" name="q" value="{{ $request['q'] ?? ''}}" placeholder="Cari User Disini ya!">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                          </form>
                    </div>
                </div>
                <table class="table table-hover table-striped mt-3">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col">Role</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Registed</th>
                        <th class="text-center">Option</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th class="text-center">{{ $loop->iteration }}</th>
                                <td>{{$user->role}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                                <td class="text-center"><a href="{{ route('edit.user',['id' => $user->id] ) }}" style="color:black"><i class="fa fa-pencil fa-fw "></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                  {{ $users->appends($request)->links() }}
            </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="tambahuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
             <!-- Form -->
             <form method="POST" action="{{ route('tambah.user') }}">
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
                <label for="name">{{ __('Name') }}</label>

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
            </div>
        </form>
</div>
@endsection