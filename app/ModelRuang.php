<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelRuang extends Model
{
    protected $table = 'ruang';

    protected $primarykey = 'id_ruang';

    protected $fillable = [
    	'id_ruang', 'nama_ruang'
    ];
}
