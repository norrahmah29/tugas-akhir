<?php

namespace App\Models;

use CodeIgniter\Model;

class ArsipModel extends Model
{
    protected $table = 'arsip_surat';
    protected $primaryKey = 'id';
    protected $allowedFields = ['no_surat', 'jenis_surat', 'tanggal_surat', 'file'];
}
