<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'id_pesanan', 'total', 'bayar','status',
    ];

    public function pesanan()
    {
        return $this->belongsTo('App\Models\Pesanan', 'id_pelanggan');
    }
}
