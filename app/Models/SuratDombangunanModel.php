<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratDombangunanModel extends Model
{
    protected $table = 'surat_dombangunan';
    protected $primaryKey = 'id_dombangunan';

    protected $allowedFields = [
        'no_surat',
        'nama',
        'jabatan',
        'kecamatanp',
        'kabupatenp',
        'kantor',
        'alamat',
        'desa',
        'kecamatan',
        'kabupaten',
        'provinsi',
    ];
}
