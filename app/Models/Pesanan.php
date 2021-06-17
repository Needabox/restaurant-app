<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = "pesanan";

    protected $dates = ['created_at'];

    protected $fillable = [
        'id_pelanggan', 'jumlah', 'id_user','status'
    ];

    public function menu()
    {
        return $this->belongsToMany('App\Models\Menu');
    }

    public function pelanggan()
    {
        return $this->belongsTo('App\Models\Pelanggan', 'id_pelanggan');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }

    public function transaksi()
    {
        return $this->belongsTo('App\Models\Transaksi');
    }
}
