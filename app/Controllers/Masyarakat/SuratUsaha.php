<?php

namespace App\Controllers\Masyarakat;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SuratUsahaModel; // Ganti model jadi SuratUsahaModel
use CodeIgniter\I18n\Time;

class SuratUsaha extends BaseController
{
    protected $model;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->model = new SuratUsahaModel();
    }

    public function index()
    {
        return view('masyarakat/surat/surat-usaha');
    }

    public function generateSurat()
    {
        $data = [
            'no_usaha'               => $this->request->getPost('no_usaha'),
            'nama'                   => $this->request->getPost('nama'),
            'nik'                    => $this->request->getPost('nik'),
            'alamat'                 => $this->request->getPost('alamat'),
            'rt_rw'                  => $this->request->getPost('rt_rw'),
            'desa'                   => $this->request->getPost('desa'),
            'kecamatan'              => $this->request->getPost('kecamatan'),
            'kabupaten'              => $this->request->getPost('kabupaten'),
            'provinsi'               => $this->request->getPost('provinsi'),
            'nama_usaha'             => $this->request->getPost('nama_usaha'),
            'alamat_usaha'           => $this->request->getPost('alamat_usaha'),
            'sejak_tahun'            => $this->request->getPost('sejak_tahun'),
            'tanggal_pembuatan_surat' => Time::now('Asia/Makassar')->toDateString()
        ];

        return view('masyarakat/surat/generate-usaha', $data);
    }

    public function simpan()
    {
        // Ambil data dari form POST
        $data = [
            'no_usaha'               => $this->request->getPost('no_usaha'),
            'nama'                   => $this->request->getPost('nama'),
            'nik'                    => $this->request->getPost('nik'),
            'alamat'                 => $this->request->getPost('alamat'),
            'rt_rw'                  => $this->request->getPost('rt_rw'),
            'desa'                   => $this->request->getPost('desa'),
            'kecamatan'              => $this->request->getPost('kecamatan'),
            'kabupaten'              => $this->request->getPost('kabupaten'),
            'provinsi'               => $this->request->getPost('provinsi'),
            'nama_usaha'             => $this->request->getPost('nama_usaha'),
            'alamat_usaha'           => $this->request->getPost('alamat_usaha'),
            'sejak_tahun'            => $this->request->getPost('sejak_tahun'),
            'tanggal_pembuatan_surat' => Time::now('Asia/Makassar')->toDateString()
        ];

        // Simpan ke database
        $this->model->insert($data);

        // Simpan ke session kalau mau dipakai setelah redirect
        session()->setFlashdata('data_surat', $data);

        // Redirect ke halaman pengajuan surat
        return redirect()->to(base_url('masyarakat/ajukansurat/'));
    }
}
