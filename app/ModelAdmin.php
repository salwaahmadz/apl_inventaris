<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelAdmin extends Model
{
    protected $table = 'admin';

    protected $primarykey = 'id_admin';

    protected $fillable = [
    	'id_admin', 'nama_admin', 'username', 'password', 'id_level'
    ];

    protected $hidden = [
    	'password'
    ];
}
