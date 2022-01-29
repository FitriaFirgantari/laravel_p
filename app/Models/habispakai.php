<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class habispakai extends Model
{
    use HasFactory;
    protected $table = 'habispakai';
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
