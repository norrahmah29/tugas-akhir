<?php

namespace App\Models;

use CodeIgniter\Model;

class AhliWarisModel extends Model
{
    protected $table = 'surat_ahliwaris';
    protected $primaryKey = 'id_ahliwaris';
    protected $allowedFields = [
        'no_surat',
        'nama_waris',
        'nik_waris',
        'tgl_lahir_waris',
        'alamat_waris',
        'pekerjaan_waris',
        'nama_meninggal',
        'tgl_meninggal',
        'tgl_terakhir_hidup',
        'hubungan',
        'tgl_surat'
    ];
}
