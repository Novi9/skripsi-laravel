<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    protected $table = 'data_alternatif';

    protected $fillable = [
        'id_data_alternatif',
        'id_user',
        'alternatif',
        'nilai'
    ];
}
