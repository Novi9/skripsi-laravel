<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = 'kriteria';

    protected $fillable = [
        'id_kriteria',
        'kriteria',
        'bobot',
        'jenis'
    ];
}
