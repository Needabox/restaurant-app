<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function getAvatar()
    {
        if (!$this->gambar) {
            return asset('images/order.png');
        }

        return asset('images/'.$this->gambar);
    }

    protected $table = "menu";

    protected $fillable = [
        'nama_menu', 'harga', 'gambar',
    ];

    public function pelanggan()
    {
        return $this->belongsToMany('App\Models\Pelanggan');
    }

    public function pesanan()
    {
        return $this->belongToMany('App\Models\Pesanan');
    }
}
