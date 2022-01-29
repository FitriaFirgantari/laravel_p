<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thabispakai extends Model
{
    use HasFactory;
    protected $table = 'thabispakai';
    protected $fillable = [
        'nama_barang',
        'kode',
        'tanggal',
        'type',
        'stock',
        'posisi',
        'harga',
        'gambar',
        'status',
        'keterangan',

    ];
}
