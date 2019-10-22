<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPengembalian extends Model
{
    protected $table = 'pengembalian';
    protected $primarykey = null;
    public $incrementing = false;
    protected $fillable = [
    	'id_peminjaman', 'id_user', 'id_inventaris', 'waktupengembalian', 'kondisi'];
}
