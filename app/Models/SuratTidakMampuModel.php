<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratTidakMampuModel extends Model
{
    protected $table = 'surat_tidakmampu';
    protected $primaryKey = 'id_tidakmampu';

    protected $allowedFields = [
        'no_surat',
        'nama',
        'bin_binti',
        'nik',
        'ttl',
        'jenis_kelamin',
        'agama',
        'pekerjaan',
        'alamat',
        'tanggal_pembuatan_surat',
    ];
}
