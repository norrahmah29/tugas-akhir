<?php

namespace App\Controllers\Masyarakat;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SuratPengantar extends BaseController
{
    public function index()
    {
        return view('masyarakat/surat/surat-pengantar');
    }
}
