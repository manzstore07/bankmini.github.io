<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabungan_keluar extends Model
{
    use HasFactory;
    protected $table = 'tabungan-masuks' ;

    protected $fillable = [
        'jumlah',
        'tanggal',
        'id_nasabah',
    ];
}
