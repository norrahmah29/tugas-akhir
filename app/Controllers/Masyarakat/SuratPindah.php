<?php

namespace App\Controllers\Masyarakat;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SuratPindahModel;
use CodeIgniter\I18n\Time; // taruh di paling atas file controller

class SuratPindah extends BaseController
{
    protected $model;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->model = new SuratPindahModel();
    }

    public function index()
    {
        return view('masyarakat/surat/surat-pindah');
    }

    public function generateSurat()
    {
        $data = [
            'no_surat' => $this->request->getPost('no_surat'),
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
            'agama' => $this->request->getPost('agama'),
            'status_perkawinan' => $this->request->getPost('status_perkawinan'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'alamat_asal' => $this->request->getPost('alamat_asal'),
            'nik' => $this->request->getPost('nik'),
            'alamat_tujuan' => $this->request->getPost('alamat_tujuan'),
            'alasan_pindah' => $this->request->getPost('alasan_pindah'),
            'tanggal_pembuatan_surat' => Time::now('Asia/Makassar')->toDateString()
        ];

        return view('masyarakat/surat/generate-pindah', $data);
    }

    public function simpan()
    {
        $data = [
            'no_surat' => $this->request->getPost('no_surat'),
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
            'agama' => $this->request->getPost('agama'),
            'status_perkawinan' => $this->request->getPost('status_perkawinan'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'alamat_asal' => $this->request->getPost('alamat_asal'),
            'nik' => $this->request->getPost('nik'),
            'alamat_tujuan' => $this->request->getPost('alamat_tujuan'),
            'alasan_pindah' => $this->request->getPost('alasan_pindah'),
            'tanggal_pembuatan_surat' => Time::now('Asia/Makassar')->toDateString()
        ];

        $this->model->insert($data);

        session()->setFlashdata('data_surat', $data);

        return redirect()->to(base_url('masyarakat/ajukansurat/'));
    }
}
