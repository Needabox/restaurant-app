@extends('layouts.master')
@section('content')
<head>
    <style>
        .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter.warning{
    background-color: #FFC107;
    color: #FFF;
  }

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
    </style>
</head>
    <div class="container">
        <div class="card mt-2">
            <div class="card-body">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <strong>{{ session()->get('message') }}</strong>
                    <button class="close" type="button" data-dismiss="alert"> 
                        <span>&times;</span>
                    </button>
                </div>
                @endif
                <div class="card-header">
                    <h3>Dashboard</h3>
                </div>
                <h2 class="mt-2 text-center">{{ $welcome }}</h2>
                <h1 class="text-center">MAKAN ENAK DENGAN HARGA MURAH</h1>
            </div>
            <div class="container">
                <div class="row">
                <div class="col-md-3">
                  <div class="card-counter primary">
                    <i class="fa fa-cutlery"></i>
                    <span class="count-numbers">{{ $menu->count() }}</span>
                    <span class="count-name">Menu</span>
                  </div>
                </div>
            
                <div class="col-md-3">
                  <div class="card-counter warning">
                    <i class="fa fa-ticket"></i>
                    <span class="count-numbers">{{ $pesanan->count() }}</span>
                    <span class="count-name">Pesanan</span>
                  </div>
                </div>
            
                <div class="col-md-3">
                  <div class="card-counter success">
                    <i class="fa fa-money"></i>
                    <span class="count-numbers">{{ $transaksi->count() }}</span>
                    <span class="count-name">Transaksi</span>
                  </div>
                </div>
            
                <div class="col-md-3">
                  <div class="card-counter info">
                    <i class="fa fa-users"></i>
                    <span class="count-numbers">{{ $users->count() }}</span>
                    <span class="count-name">Users</span>
                  </div>
                </div>
              </div>
            </div>
            @if (auth()->user()->role == 'cashier' ||  auth()->user()->role == 'waiter' || auth()->user()->role == 'owner')
              <a href="{{ route('print.transaksi') }}" class="btn btn-danger mt-3">Print</a>
            @endif
        </div>
    </div>
@endsection