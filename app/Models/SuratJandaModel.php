<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratJandaModel extends Model
{
    protected $table = 'surat_janda'; // Nama tabel yang sesuai dengan database
    protected $primaryKey = 'id_janda';
    protected $allowedFields = [
        'no_surat',
        'nama',
        'nik',
        'ttl',
        'agama',
        'alamat'
    ];
}
