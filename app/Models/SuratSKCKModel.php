<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratSKCKModel extends Model
{
    protected $table = 'surat_skck';
    protected $primaryKey = 'id_skck';
    protected $allowedFields = [
        'no_surat',
        'nama',
        'ttl',
        'jenis_kelamin',
        'status_perkawinan',
        'kewarganegaraan',
        'agama',
        'pekerjaan',
        'nik',
        'alamat'
    ];
}
