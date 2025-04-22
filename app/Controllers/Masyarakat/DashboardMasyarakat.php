<?php

namespace App\Controllers\Masyarakat;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardMasyarakat extends BaseController
{
    public function index()
    {
        return view('masyarakat/dashboard');
    }
}
