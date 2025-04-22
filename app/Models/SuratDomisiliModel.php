<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratDomisiliModel extends Model
{
    protected $table = 'surat_domisili';
    protected $primaryKey = 'id_suratdomisili';

    protected $allowedFields = [
        'no_surat',
        'nama_gapoktan',
        'tgl_pembentukan',
        'alamat',
        'ketua',
        'sekretaris',
        'bendahara',
    ];
}
