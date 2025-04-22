<?php

namespace App\Controllers\Masyarakat;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SuratDomwargaModel;

class SuratDomisiliWarga extends BaseController
{
    protected $model;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->model = new SuratDomwargaModel();
    }

    public function index()
    {
        return view('masyarakat/surat/surat-domisiliwarga');
    }

    public function generateSurat()
    {
        $data = [
            'no_surat'              => $this->request->getPost('no_surat'),
            'nama_kepala_desa'      => $this->request->getPost('nama_kepala_desa'),
            'jabatan_kepala_desa'   => $this->request->getPost('jabatan_kepala_desa'),
            'kecamatan_kepala_desa' => $this->request->getPost('kecamatan_kepala_desa'),
            'kabupaten_kepala_desa' => $this->request->getPost('kabupaten_kepala_desa'),
            'nama'                  => $this->request->getPost('nama'),
            'nik'                   => $this->request->getPost('nik'),
            'alamat'                => $this->request->getPost('alamat'),
            'desa'                  => $this->request->getPost('desa'),
            'kecamatan'             => $this->request->getPost('kecamatan'),
            'kabupaten'             => $this->request->getPost('kabupaten'),
            'provinsi'              => $this->request->getPost('provinsi'),


        ];

        return view('masyarakat/surat/generate-domisili', $data);
    }

    public function simpan()
    {
        // Ambil data dari form POST
        $data = [
            'no_surat'              => $this->request->getPost('no_surat'),
            'nama_kepala_desa'      => $this->request->getPost('nama_kepala_desa'),
            'jabatan_kepala_desa'   => $this->request->getPost('jabatan_kepala_desa'),
            'kecamatan_kepala_desa' => $this->request->getPost('kecamatan_kepala_desa'),
            'kabupaten_kepala_desa' => $this->request->getPost('kabupaten_kepala_desa'),
            'nama'                  => $this->request->getPost('nama'),
            'nik'                   => $this->request->getPost('nik'),
            'alamat'                => $this->request->getPost('alamat'),
            'desa'                  => $this->request->getPost('desa'),
            'kecamatan'             => $this->request->getPost('kecamatan'),
            'kabupaten'             => $this->request->getPost('kabupaten'),
            'provinsi'              => $this->request->getPost('provinsi'),


        ];

        // Simpan ke database jika kamu punya model, contoh:
        $this->model->insert($data);

        // Simpan ke session agar bisa ditampilkan setelah redirect
        session()->setFlashdata('data_surat', $data);

        // Redirect ke fungsi generateSurat (tampilan surat)
        return redirect()->to(base_url('masyarakat/ajukansurat/'));
    }
}
