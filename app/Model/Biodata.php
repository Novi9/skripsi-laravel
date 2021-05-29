<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = 'biodata';

    protected $fillable = [
        'id_biodata',
        'id_user',
        'nama',
        'tanggal_lahir',
        'tempat_lahir',
        'jenis_kelamin',
        'status',
        'alamat',
        'email',
        'no_hp',
        'pendidikan_terakhir',
        'pengalaman_kerja',
        'jurusan_pendidikan',
        'ipk',
        'wawancara',
        'psikotest',
        'kemampuan bahasa asing',
        'ktp',
        'pas poto',
        'ijazah',
        'transkip_nilai',
        'portofolio'
    ];
}
