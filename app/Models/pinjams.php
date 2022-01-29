<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjams extends Model
{
    use HasFactory;
    protected $table = 'pinjams';
    protected $fillable = [
        'user',
        'nama_barang',
        'kode',
        'type',
        'banyaknya',
        'tanggal_t',
        'tanggal_p',
        'status',
        'keterangan',

    ];
}
