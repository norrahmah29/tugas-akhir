<?php

namespace App\Controllers\Masyarakat;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\I18n\Time; // taruh di paling atas file controller

class SuratTidakMampu extends BaseController
{
    public function index()
    {
        return view('masyarakat/surat/surat-tidakmampu');
    }
}
