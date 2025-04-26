<?php

namespace App\Controllers\Masyarakat;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SuratBelumBekerjaModel;
use CodeIgniter\I18n\Time; // taruh di paling atas file controller

class SuratBelumBekerja extends BaseController
{
    protected $model;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->model = new SuratBelumBekerjaModel();
    }

    public function index()
    {
        return view('masyarakat/surat/surat-belumbekerja');
    }

    public function generateSurat()
    {
        $data = [
            'no_surat'         => $this->request->getPost('no_surat'),
            'nama'             => $this->request->getPost('nama'),
            'nik'              => $this->request->getPost('nik'),
            'ttl'              => $this->request->getPost('ttl'),
            'jenis_kelamin'    => $this->request->getPost('jenis_kelamin'),
            'agama'            => $this->request->getPost('agama'),
            'status_pekerjaan' => $this->request->getPost('status_pekerjaan'),
            'warga_negara'     => $this->request->getPost('warga_negara'),
            'alamat'           => $this->request->getPost('alamat'),
        ];

        return view('masyarakat/surat/generate-belumbekerja', $data);
    }

    public function simpan()
    {
        // Ambil data dari form POST
        $data = [

            'no_surat'         => $this->request->getPost('no_surat'),
            'nama'             => $this->request->getPost('nama'),
            'nik'              => $this->request->getPost('nik'),
            'ttl'              => $this->request->getPost('ttl'),
            'jenis_kelamin'    => $this->request->getPost('jenis_kelamin'),
            'agama'            => $this->request->getPost('agama'),
            'status_pekerjaan' => $this->request->getPost('status_pekerjaan'),
            'warga_negara'     => $this->request->getPost('warga_negara'),
            'alamat'           => $this->request->getPost('alamat'),
        ];

        // Simpan ke database jika kamu punya model, contoh:
        $this->model->insert($data);

        // Simpan ke session agar bisa ditampilkan setelah redirect
        session()->setFlashdata('data_surat', $data);

        // Redirect ke fungsi generateSurat (tampilan surat)
        return redirect()->to(base_url('masyarakat/ajukansurat/'));
    }
}
