<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabungan_masuk extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'tabungan-keluars' ;

    protected $fillable = [
        'jumlah',
        'tanggal',
        'id_nasabah',
    ];
}
