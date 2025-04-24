<?php

namespace App\Controllers\Masyarakat;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SuratSKCKModel;
use CodeIgniter\I18n\Time; // taruh di paling atas file controller

class SuratPengantarSKCK extends BaseController
{
    protected $model;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->model = new SuratSKCKModel();
    }

    public function index()
    {
        return view('masyarakat/surat/surat-skck');
    }

    public function generateSurat()
    {
        $data = [
            'no_surat'            => $this->request->getPost('no_surat'),
            'nama'                => $this->request->getPost('nama'),
            'ttl'                 => $this->request->getPost('ttl'),
            'jenis_kelamin'       => $this->request->getPost('jenis_kelamin'),
            'status_perkawinan'   => $this->request->getPost('status_perkawinan'),
            'kewarganegaraan'     => $this->request->getPost('kewarganegaraan'),
            'agama'               => $this->request->getPost('agama'),
            'pekerjaan'           => $this->request->getPost('pekerjaan'),
            'nik'                 => $this->request->getPost('nik'),
            'alamat'              => $this->request->getPost('alamat'),
            'tanggal_pembuatan_surat' => Time::now('Asia/Makassar')->toDateString()
        ];

        return view('masyarakat/surat/generate-domisili', $data);
    }

    public function simpan()
    {
        // Ambil data dari form POST
        $data = [
            'no_surat'            => $this->request->getPost('no_surat'),
            'nama'                => $this->request->getPost('nama'),
            'ttl'                 => $this->request->getPost('ttl'),
            'jenis_kelamin'       => $this->request->getPost('jenis_kelamin'),
            'status_perkawinan'   => $this->request->getPost('status_perkawinan'),
            'kewarganegaraan'     => $this->request->getPost('kewarganegaraan'),
            'agama'               => $this->request->getPost('agama'),
            'pekerjaan'           => $this->request->getPost('pekerjaan'),
            'nik'                 => $this->request->getPost('nik'),
            'alamat'              => $this->request->getPost('alamat')
        ];

        // Simpan ke database jika kamu punya model, contoh:
        $this->model->insert($data);

        // Simpan ke session agar bisa ditampilkan setelah redirect
        session()->setFlashdata('data_surat', $data);

        // Redirect ke fungsi generateSurat (tampilan surat)
        return redirect()->to(base_url('masyarakat/ajukansurat/'));
    }
}
