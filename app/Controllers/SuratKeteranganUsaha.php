<?php

namespace App\Controllers;

use App\Models\KeteranganUsahaModel;
use CodeIgniter\Controller;

class SuratKeteranganUsaha extends Controller
{
    protected $model;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->model = new KeteranganUsahaModel();
    }

    public function index()
    {
        $data['surat_keteranganusaha'] = $this->model->findAll();
        return view('pages/admin/tabel_keteranganusaha', $data);
    }

    public function form_keteranganusaha()
    {
        return view('pages/admin/form_keteranganusaha');
    }

    public function tambah_keteranganusaha()
    {
        $this->model->save([
            'no_surat' => $this->request->getPost('no_surat'),
            'nama_pemohon' => $this->request->getPost('nama_pemohon'),
            'nik' => $this->request->getPost('nik'),
            'alamat' => $this->request->getPost('alamat'),
            'desa' => $this->request->getPost('desa'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'kabupaten' => $this->request->getPost('kabupaten'),
            'provinsi' => $this->request->getPost('provinsi'),
            'jenis_usaha' => $this->request->getPost('jenis_usaha'),
            'tahun_mulai' => $this->request->getPost('tahun_mulai'),
            'tanggal_surat' => $this->request->getPost('tanggal_surat'),
            'nama_kepala_desa' => $this->request->getPost('nama_kepala_desa'),
        ]);

        return redirect()->to('/keter                                                                                                                                                                                                                                                      anganusaha')->with('message', 'Data berhasil ditambahkan.');
    }

    public function edit_keteranganusaha($id_suratketeranganusaha)
    {
        $data['keteranganusaha'] = $this->model->find($id_suratketeranganusaha);
        return view('pages/admin/edit_keteranganusaha', $data);
    }

    public function update_keteranganusaha($id_suratketeranganusaha)
    {
        $data = [
            'no_surat' => $this->request->getPost('no_surat'),
            'nama_pemohon' => $this->request->getPost('nama_pemohon'),
            'nik' => $this->request->getPost('nik'),
            'alamat' => $this->request->getPost('alamat'),
            'desa' => $this->request->getPost('desa'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'kabupaten' => $this->request->getPost('kabupaten'),
            'provinsi' => $this->request->getPost('provinsi'),
            'jenis_usaha' => $this->request->getPost('jenis_usaha'),
            'tahun_mulai' => $this->request->getPost('tahun_mulai'),
            'tanggal_surat' => $this->request->getPost('tanggal_surat'),
            'nama_kepala_desa' => $this->request->getPost('nama_kepala_desa'),
        ];

        $this->model->update($id_suratketeranganusaha, $data);
        return redirect()->to('/admin/tabel_keteranganusaha')->with('message', 'Data Keterangan Usaha berhasil diubah');
    }

    public function delete_keteranganusaha($id_suratketeranganusaha)
    {
        $this->model->delete($id_suratketeranganusaha);
        return redirect()->to('/suratketeranganusaha')->with('message', 'Data Keterangan Usaha berhasil dihapus');
    }
}
