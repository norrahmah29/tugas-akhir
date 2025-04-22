<?php

namespace App\Controllers\Masyarakat;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SuratDombangunanModel;

class SuratDomisiliBangunan extends BaseController
{
    protected $model;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->model = new SuratDombangunanModel();
    }

    public function index()
    {
        return view('masyarakat/surat/surat-domisilibangunan');
    }

    public function generateSurat()
    {
        $data = [
            'nama'         => $this->request->getPost('nama'),
            'jabatan'      => $this->request->getPost('jabatan'),
            'kecamatanp'   => $this->request->getPost('kecamatanp'),
            'kabupatenp'   => $this->request->getPost('kabupatenp'),
            'kantor'       => $this->request->getPost('kantor'),
            'alamat'       => $this->request->getPost('alamat'),
            'desa'         => $this->request->getPost('desa'),
            'kecamatan'    => $this->request->getPost('kecamatan'),
            'kabupaten'    => $this->request->getPost('kabupaten'),
            'provinsi'     => $this->request->getPost('provinsi'),
            'alamat_bangunan' => $this->request->getPost('alamat_bangunan'),
            'rt' => $this->request->getPost('rt')

        ];

        return view('masyarakat/surat/generate-domisilibangunan', $data);
    }

    public function simpan()
    {
        // Ambil data dari form POST
        $data = [
            'nama'         => $this->request->getPost('nama'),
            'jabatan'      => $this->request->getPost('jabatan'),
            'kecamatanp'   => $this->request->getPost('kecamatanp'),
            'kabupatenp'   => $this->request->getPost('kabupatenp'),
            'kantor'       => $this->request->getPost('kantor'),
            'alamat'       => $this->request->getPost('alamat'),
            'desa'         => $this->request->getPost('desa'),
            'kecamatan'    => $this->request->getPost('kecamatan'),
            'kabupaten'    => $this->request->getPost('kabupaten'),
            'provinsi'     => $this->request->getPost('provinsi')

        ];

        // Simpan ke database jika kamu punya model, contoh:
        $this->model->insert($data);

        // Simpan ke session agar bisa ditampilkan setelah redirect
        session()->setFlashdata('data_surat', $data);

        // Redirect ke fungsi generateSurat (tampilan surat)
        return redirect()->to(base_url('masyarakat/ajukansurat/'));
    }
}
