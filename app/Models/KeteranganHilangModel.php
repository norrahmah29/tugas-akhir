<?php

namespace App\Models;

use CodeIgniter\Model;

class KeteranganHilangModel extends Model
{
    protected $table = 'surat_keteranganhilang';
    protected $primaryKey = 'id_suratketeranganhilang';
    protected $allowedFields = [
        'no_surat',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'nik',
        'agama',
        'alamat',
        'dokumen',
        'tgl_terjadi',
        'disekitar'
    ];
}
