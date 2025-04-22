<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratKematianModel extends Model
{
    protected $table = 'surat_kematian'; // Nama tabel
    protected $primaryKey = 'id_kematian'; // Primary key
    protected $allowedFields = [
        'no_surat',
        'nama',
        'jenis_kelamin',
        'ttl',
        'agama',
        'alamat',
        'hari_tanggal_kematian',
        'jam_kematian',
        'tempat_kematian',
        'penyebab_kematian'
    ];

    // Jika perlu menambahkan rules atau timestamps, bisa ditambahkan di sini:
    // protected $useTimestamps = true;
}
