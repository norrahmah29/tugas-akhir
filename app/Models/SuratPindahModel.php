<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratPindahModel extends Model
{
    protected $table = 'surat_pindah';
    protected $primaryKey = 'id_pindah';

    protected $allowedFields = [
        'no_surat',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'kewarganegaraan',
        'agama',
        'status_perkawinan',
        'pekerjaan',
        'pendidikan',
        'alamat_asal',
        'nik',
        'alamat_tujuan',
        'alasan_pindah',
        'tanggal_pembuatan_surat',
    ];
}
