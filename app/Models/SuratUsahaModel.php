<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratUsahaModel extends Model
{
    protected $table = 'surat_usaha'; // Pastikan ini sama seperti nama tabel kamu
    protected $primaryKey = 'id_usaha';

    protected $allowedFields = [
        'no_usaha',
        'nama',
        'nik',
        'alamat',
        'rt_rw',
        'desa',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'nama_usaha',
        'alamat_usaha',
        'sejak_tahun',
        'tanggal_pembuatan_surat'
    ];
}
