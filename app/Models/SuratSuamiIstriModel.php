<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratSuamiIstriModel extends Model
{
    protected $table = 'tabel_suamiistri';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'no_surat',
        'nama_suami',
        'tgl_lahir_suami',
        'agama_suami',
        'status_suami',
        'alamat_suami',
        'nama_istri',
        'tgl_lahir_istri',
        'agama_istri',
        'status_istri',
        'alamat_istri',
        'tgl_nikah',
        'tempat_nikah',
        'wali_nikah',
        'mahar',
        'saksi1',
        'saksi2',
        'anak',
        'tgl_surat'
    ];
}
