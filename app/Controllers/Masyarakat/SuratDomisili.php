<?php

namespace App\Controllers\Masyarakat;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SuratDomisiliModel;
use CodeIgniter\I18n\Time; // taruh di paling atas file controller kamu

class SuratDomisili extends BaseController
{
    protected $model;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->model = new SuratDomisiliModel();
    }

    public function index()
    {
        return view('masyarakat/surat/surat-domisili');
    }

    public function generateSurat()
    {

        $data = [
            'nama_gapoktan' => $this->request->getPost('nama_gapoktan'),
            'tgl_pembentukan' => $this->request->getPost('tgl_pembentukan'),
            'alamat' => $this->request->getPost('alamat'),
            'ketua' => $this->request->getPost('ketua'),
            'sekretaris' => $this->request->getPost('sekretaris'),
            'bendahara' => $this->request->getPost('bendahara'),
            'tanggal_pembuatan_surat' => Time::now('Asia/Makassar')->toDateString()
        ];

        return view('masyarakat/surat/generate-domisili', $data);
    }

    public function simpan()
    {
        // Ambil data dari form POST
        $data = [
            'nama_gapoktan'     => $this->request->getPost('nama_gapoktan'),
            'tgl_pembentukan'   => $this->request->getPost('tgl_pembentukan'),
            'alamat'            => $this->request->getPost('alamat'),
            'ketua'             => $this->request->getPost('ketua'),
            'sekretaris'        => $this->request->getPost('sekretaris'),
            'bendahara'         => $this->request->getPost('bendahara'),
        ];

        // Simpan ke database jika kamu punya model, contoh:
        $this->model->insert($data);

        // Simpan ke session agar bisa ditampilkan setelah redirect
        session()->setFlashdata('data_surat', $data);

        // Redirect ke fungsi generateSurat (tampilan surat)
        return redirect()->to(base_url('masyarakat/ajukansurat/'));
    }
}
