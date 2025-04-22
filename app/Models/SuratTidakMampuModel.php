<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratTidakMampuModel extends Model
{
    protected $table = 'tabel_tidakmampu'; // Sesuai nama tabel di database
    protected $primaryKey = 'id_surattidakmampu';
    protected $allowedFields = [
        'no_surat',
        'nama',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'status_kemampuan',
        'keperluan',
        'tanggal_surat',
        'nama_kepala_desa',
        'tanda_tangan',
        'stempel'
    ];
}
