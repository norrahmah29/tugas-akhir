<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratDomwargaModel extends Model
{
    protected $table = 'surat_domwarga';
    protected $primaryKey = 'id_domwarga';

    protected $allowedFields = [
        'no_surat',
        'nama_kepala_desa',
        'jabatan_kepala_desa',
        'kecamatan_kepala_desa',
        'kabupaten_kepala_desa',
        'nama',
        'nik',
        'alamat',
        'desa',
        'kecamatan',
        'kabupaten',
        'provinsi'
    ];
}
