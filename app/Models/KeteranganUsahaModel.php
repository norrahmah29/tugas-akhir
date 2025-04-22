<?php

namespace App\Models;

use CodeIgniter\Model;

class KeteranganUsahaModel extends Model
{
    protected $table = 'surat_keteranganusaha';
    protected $primaryKey = 'id_suratketeranganusaha';
    protected $allowedFields = [
        'no_surat',
        'nama_pemohon',
        'nik',
        'alamat',
        'desa',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'jenis_usaha',
        'tahun_mulai',
        'tanggal_surat',
        'nama_kepala_desa'
    ];
}
