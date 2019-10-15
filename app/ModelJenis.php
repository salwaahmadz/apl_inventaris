<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelJenis extends Model
{
    protected $table = 'jenis';

    protected $primarykey = 'id_jenis';

    protected $fillable = [
    	'id_jenis', 'nama_jenis', 'kondisi'
    ];
}
