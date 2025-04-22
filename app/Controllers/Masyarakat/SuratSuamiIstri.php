<?php

namespace App\Controllers\Masyarakat;

use App\Controllers\BaseController;
use App\Models\SuratSuamiIstriModel;

class SuratSuamiIstri extends BaseController
{
    protected $model;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->model = new SuratSuamiIstriModel(); // Ganti jika kamu pakai model lain
    }

    public function index()
    {
        return view('masyarakat/surat/surat-suamiistri'); // Ganti view sesuai form isian nikah
    }

    public function generateSurat()
    {
        $data = [
            // Data Suami
            'nama_suami'            => $this->request->getPost('nama_suami'),
            'tempat_lahir_suami'    => $this->request->getPost('tempat_lahir_suami'),
            'tgl_lahir_suami'       => $this->request->getPost('tgl_lahir_suami'),
            'agama_suami'           => $this->request->getPost('agama_suami'),
            'status_suami'          => $this->request->getPost('status_suami'),
            'alamat_suami'          => $this->request->getPost('alamat_suami'),

            // Data Istri
            'nama_istri'            => $this->request->getPost('nama_istri'),
            'tempat_lahir_istri'    => $this->request->getPost('tempat_lahir_istri'),
            'tgl_lahir_istri'       => $this->request->getPost('tgl_lahir_istri'),
            'agama_istri'           => $this->request->getPost('agama_istri'),
            'status_istri'          => $this->request->getPost('status_istri'),
            'alamat_istri'          => $this->request->getPost('alamat_istri'),

            // Info Pernikahan
            'hari_pernikahan'       => $this->request->getPost('hari_pernikahan'),
            'tgl_pernikahan'        => $this->request->getPost('tgl_pernikahan'),
            'tempat_akad'           => $this->request->getPost('tempat_akad'),
            'wali_nikah'            => $this->request->getPost('wali_nikah'),
            'mahar'                 => $this->request->getPost('mahar'),

            // Saksi
            'saksi_pertama'         => $this->request->getPost('saksi_pertama'),
            'saksi_kedua'           => $this->request->getPost('saksi_kedua'),

            // Anak
            'nama_anak'             => $this->request->getPost('nama_anak'),
        ];

        return view('masyarakat/surat/generate-nikah', $data);
    }

    public function simpan()
    {
        $data = [
            'nama_suami'            => $this->request->getPost('nama_suami'),
            'tempat_lahir_suami'    => $this->request->getPost('tempat_lahir_suami'),
            'tgl_lahir_suami'       => $this->request->getPost('tgl_lahir_suami'),
            'agama_suami'           => $this->request->getPost('agama_suami'),
            'status_suami'          => $this->request->getPost('status_suami'),
            'alamat_suami'          => $this->request->getPost('alamat_suami'),

            'nama_istri'            => $this->request->getPost('nama_istri'),
            'tempat_lahir_istri'    => $this->request->getPost('tempat_lahir_istri'),
            'tgl_lahir_istri'       => $this->request->getPost('tgl_lahir_istri'),
            'agama_istri'           => $this->request->getPost('agama_istri'),
            'status_istri'          => $this->request->getPost('status_istri'),
            'alamat_istri'          => $this->request->getPost('alamat_istri'),

            'hari_pernikahan'       => $this->request->getPost('hari_pernikahan'),
            'tgl_pernikahan'        => $this->request->getPost('tgl_pernikahan'),
            'tempat_akad'           => $this->request->getPost('tempat_akad'),
            'wali_nikah'            => $this->request->getPost('wali_nikah'),
            'mahar'                 => $this->request->getPost('mahar'),

            'saksi_pertama'         => $this->request->getPost('saksi_pertama'),
            'saksi_kedua'           => $this->request->getPost('saksi_kedua'),

            'nama_anak'             => $this->request->getPost('nama_anak'),
        ];

        $this->model->insert($data);

        session()->setFlashdata('data_surat', $data);

        return redirect()->to(base_url('masyarakat/ajukansurat/'));
    }
}
