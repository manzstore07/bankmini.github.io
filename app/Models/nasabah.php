<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nasabah extends Model
{
    use HasFactory;
    protected $table = 'nasabahs' ;

    protected $fillable = [
        'nama',
        'nisn',
        'kelas',
        'jurusan',
        'pin',
        'telepon',
    ];
}
