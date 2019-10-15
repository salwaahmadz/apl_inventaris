<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelInventaris extends Model
{
    protected $table = 'inventaris';

    protected $primarykey = 'id_inventaris';

    protected $fillable = [
    	'id_inventaris', 'nama_barang', 'id_jenis', 'kondisi', 'kuantitas', 'waktu_register'
    ];
}
