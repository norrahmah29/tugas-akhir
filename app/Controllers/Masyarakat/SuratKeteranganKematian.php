<?php

namespace App\Controllers\Masyarakat;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SuratKematianModel;
use CodeIgniter\I18n\Time; // taruh di paling atas file controller

class SuratKeteranganKematian extends BaseController
{
    protected $model;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->model = new SuratKematianModel();
    }

    public function index()
    {
        return view('masyarakat/surat/surat-kematian');
    }

    public function generateSurat()
    {

        $data = [
            'no_surat'          => $this->request->getPost('no_surat'),
            'nama'              => $this->request->getPost('nama'),
            'jenis_kelamin'     => $this->request->getPost('jenis_kelamin'),
            'ttl'               => $this->request->getPost('ttl'),
            'agama'             => $this->request->getPost('agama'),
            'alamat'            => $this->request->getPost('alamat'),
            'hari_tanggal_kematian' => $this->request->getPost('hari_tanggal_kematian'),
            'jam_kematian'      => $this->request->getPost('jam_kematian'),
            'tempat_kematian'   => $this->request->getPost('tempat_kematian'),
            'penyebab_kematian' => $this->request->getPost('penyebab_kematian'),
            'tanggal_pembuatan_surat' => Time::now('Asia/Makassar')->toDateString()
        ];

        return view('masyarakat/surat/generate-kematian', $data);
    }

    public function simpan()
    {
        // Ambil data dari form POST
        $data = [
            'no_surat'          => $this->request->getPost('no_surat'),
            'nama'              => $this->request->getPost('nama'),
            'jenis_kelamin'     => $this->request->getPost('jenis_kelamin'),
            'ttl'               => $this->request->getPost('ttl'),
            'agama'             => $this->request->getPost('agama'),
            'alamat'            => $this->request->getPost('alamat'),
            'hari_tanggal_kematian' => $this->request->getPost('hari_tanggal_kematian'),
            'jam_kematian'      => $this->request->getPost('jam_kematian'),
            'tempat_kematian'   => $this->request->getPost('tempat_kematian'),
            'penyebab_kematian' => $this->request->getPost('penyebab_kematian'),
        ];

        // Simpan ke database jika kamu punya model, contoh:
        $this->model->insert($data);

        // Simpan ke session agar bisa ditampilkan setelah redirect
        session()->setFlashdata('data_surat', $data);

        // Redirect ke fungsi generateSurat (tampilan surat)
        return redirect()->to(base_url('masyarakat/ajukansurat/'));
    }
}
