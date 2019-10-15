<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelJurusan extends Model
{
    protected $table = 'jurusan';

    protected $primarykey = 'id_jurusan';

    protected $fillable = [
    	'id_jurusan', 'nama_jurusan'
    ];
}
