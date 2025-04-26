<?php

namespace App\Controllers\Masyarakat;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SuratTidakMampuModel;
use CodeIgniter\I18n\Time;

class SuratTidakMampu extends BaseController
{
    protected $model;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->model = new SuratTidakMampuModel();
    }

    public function index()
    {
        return view('masyarakat/surat/surat-tidakmampu');
    }

    public function generateSurat()
    {
        $data = [
            'no_surat' => $this->request->getPost('no_surat'),
            'nama' => $this->request->getPost('nama'),
            'bin_binti' => $this->request->getPost('bin_binti'),
            'nik' => $this->request->getPost('nik'),
            'ttl' => $this->request->getPost('ttl'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'agama' => $this->request->getPost('agama'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'alamat' => $this->request->getPost('alamat'),
            'tanggal_pembuatan_surat' => Time::now('Asia/Makassar')->toDateString()
        ];

        return view('masyarakat/surat/generate-tidakmampu', $data);
    }

    public function simpan()
    {
        $data = [
            'no_surat' => $this->request->getPost('no_surat'),
            'nama' => $this->request->getPost('nama'),
            'bin_binti' => $this->request->getPost('bin_binti'),
            'nik' => $this->request->getPost('nik'),
            'ttl' => $this->request->getPost('ttl'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'agama' => $this->request->getPost('agama'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'alamat' => $this->request->getPost('alamat'),
            'tanggal_pembuatan_surat' => Time::now('Asia/Makassar')->toDateString()
        ];

        $this->model->insert($data);

        session()->setFlashdata('data_surat', $data);

        return redirect()->to(base_url('masyarakat/ajukansurat/'));
    }
}
