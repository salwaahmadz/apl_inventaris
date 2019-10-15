<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    protected $table = 'user';

    protected $primarykey = 'id_user';

    protected $fillable = [
    	'id_user', 'nama_user', 'id_kelas', 'id_jurusan', 'username', 'password', 'id_level'
    ];

    protected $hidden = [
        'password'
    ];
}
