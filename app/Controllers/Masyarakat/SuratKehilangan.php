<?php

namespace App\Controllers\Masyarakat;

use App\Controllers\BaseController;
use App\Models\KeteranganUsahaModel;
use App\Models\KeteranganHilangModel;

class SuratKehilangan extends BaseController
{
    protected $model;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->model = new KeteranganHilangModel();
    }

    public function index()
    {
        return view('masyarakat/surat/surat-kehilangan');
    }

    public function generateSurat()
    {
        $data = [
            'no_surat'         => $this->request->getPost('no_surat'),
            'nama'             => $this->request->getPost('nama'),
            'jenis_kelamin'    => $this->request->getPost('jenis_kelamin'),
            'tempat_lahir'     => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir'    => $this->request->getPost('tanggal_lahir'),
            'nik'              => $this->request->getPost('nik'),
            'agama'            => $this->request->getPost('agama'),
            'alamat'           => $this->request->getPost('alamat'),
            'dokumen'          => $this->request->getPost('dokumen'),
            'tanggal_hilang'   => $this->request->getPost('tanggal_hilang'),
            'lokasi_kejadian'  => $this->request->getPost('lokasi_kejadian'),
        ];

        return view('masyarakat/surat/generate_kehilangan', $data);
    }

    public function simpan()
    {
        $data = [
            'no_surat'       => $this->request->getPost('no_surat'),
            'nama'           => $this->request->getPost('nama'),
            'jenis_kelamin'  => $this->request->getPost('jenis_kelamin'),
            'tempat_lahir'   => $this->request->getPost('tempat_lahir'),
            'tgl_lahir'      => $this->request->getPost('tanggal_lahir'), // jika form pakai name="tanggal_lahir"
            'nik'            => $this->request->getPost('nik'),
            'agama'          => $this->request->getPost('agama'),
            'alamat'         => $this->request->getPost('alamat'),
            'dokumen'        => $this->request->getPost('dokumen'),
            'tgl_terjadi'    => $this->request->getPost('tgl_terjadi'), // sesuai yang kamu inginkan
            'disekitar'      => $this->request->getPost('disekitar'),   // sesuai yang kamu inginkan
        ];

        $this->model->insert($data);

        // Optional: Simpan ke session kalau mau ditampilkan lagi
        session()->setFlashdata('data_surat', $data);

        return redirect()->to(base_url('masyarakat/ajukansurat'))->with('success', 'Surat kehilangan berhasil diajukan.');
    }
}
