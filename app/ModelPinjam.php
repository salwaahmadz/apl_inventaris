<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPinjam extends Model
{
    protected $table = 'peminjaman';
    protected $primarykey = 'id_peminjaman';
    protected $fillable = [
    	'id_peminjaman', 'waktupinjam', 'id_user', 'id_kelas', 'id_jurusan', 'id_inventaris', 'id_jenis', 'kuantitas', 'id_ruang', 'id_admin', 'status_pengembalian'];
}
