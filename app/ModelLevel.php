<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelLevel extends Model
{
    protected $table = 'level';

    protected $primarykey = 'id_level';

    protected $fillable = [
    	'id_level', 'nama_level'
    ];
}
