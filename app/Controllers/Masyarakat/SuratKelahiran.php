<?php

namespace App\Controllers\Masyarakat;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SuratKelahiranModel;

class SuratKelahiran extends BaseController
{
    protected $model;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->model = new SuratKelahiranModel();
    }

    public function index()
    {
        return view('masyarakat/surat/surat-kelahiran');
    }

    public function generateSurat()
    {

        $data = [
            'no_surat'     => $this->request->getPost('no_surat'),
            'nama'         => $this->request->getPost('nama'),
            'ttl'          => $this->request->getPost('ttl'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'pekerjaan'    => $this->request->getPost('pekerjaan'),
            'alamat'       => $this->request->getPost('alamat'),
            'nama_ayah'    => $this->request->getPost('nama_ayah'),
            'nama_ibu'     => $this->request->getPost('nama_ibu'),
            'anak_ke'      => $this->request->getPost('anak_ke'),

        ];

        return view('masyarakat/surat/generate-domisili', $data);
    }

    public function simpan()
    {
        // Ambil data dari form POST
        $data = [
            'no_surat'     => $this->request->getPost('no_surat'),
            'nama'         => $this->request->getPost('nama'),
            'ttl'          => $this->request->getPost('ttl'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'pekerjaan'    => $this->request->getPost('pekerjaan'),
            'alamat'       => $this->request->getPost('alamat'),
            'nama_ayah'    => $this->request->getPost('nama_ayah'),
            'nama_ibu'     => $this->request->getPost('nama_ibu'),
            'anak_ke'      => $this->request->getPost('anak_ke'),
        ];


        // Simpan ke database jika kamu punya model, contoh:
        $this->model->insert($data);

        // Simpan ke session agar bisa ditampilkan setelah redirect
        session()->setFlashdata('data_surat', $data);

        // Redirect ke fungsi generateSurat (tampilan surat)
        return redirect()->to(base_url('masyarakat/ajukansurat/'));
    }
}
