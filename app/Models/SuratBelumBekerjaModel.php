<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratBelumBekerjaModel extends Model
{
    protected $table = 'surat_belumbekerja';
    protected $primaryKey = 'id_belumbekerja';
    protected $allowedFields = [
        'no_surat',
        'nama',
        'nik',
        'ttl',
        'jenis_kelamin',
        'agama',
        'status_pekerjaan',
        'warga_negara',
        'alamat'
    ];
}
