<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKelas extends Model
{
    protected $table = 'kelas';

    protected $primarykey = 'id_kelas';

    protected $fillable = [
    	'id_kelas', 'tingkat_kelas'
    ];
}
