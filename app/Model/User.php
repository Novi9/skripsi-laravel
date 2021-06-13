<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'id_user',
        'nama',
        'username',
        'password',
        'jabatan'
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];

}
