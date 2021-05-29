<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Seleksi extends Model
{
    protected $table = 'perhitungan_dan_seleksi_nilai';

    protected $fillable = [
        'id_user',
        'id_kriteria',
        'nilai'
    ];
}
