<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelanggan', 'jenis_kelamin', 'nohp','alamat'
    ];

    protected $table = "pelanggan";

    public function menu()
    {
        return $this->belongsToMany('App\Models\Menu');
    }
}
