<?php

namespace App\Controllers;

use App\Models\KeteranganHilangModel;
use CodeIgniter\Controller;

class SuratKeteranganHilang extends Controller
{
    protected $model;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->model = new KeteranganHilangModel();
    }

    public function index()
    {
        $data['surat_kehilangan'] = $this->model->findAll();
        return view('pages/admin/tabel_keteranganhilang', $data);
    }

    public function form_suratkehilangan()
    {
        return view('pages/admin/form_suratkehilangan');
    }

    public function tambah_suratkehilangan()
    {
        $this->model->save([
            'no_surat' => $this->request->getPost('no_surat'),
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'nik' => $this->request->getPost('nik'),
            'agama' => $this->request->getPost('agama'),
            'alamat' => $this->request->getPost('alamat'),
            'tanggal_hilang' => $this->request->getPost('tanggal_hilang'),
            'lokasi_hilang' => $this->request->getPost('lokasi_hilang'),
            'keperluan' => $this->request->getPost('keperluan'),
            'tanggal_surat' => $this->request->getPost('tanggal_surat'),
            'nama_kepala_desa' => $this->request->getPost('nama_kepala_desa'),
        ]);

        return redirect()->to('/suratketeranganhilang')->with('message', 'Data berhasil ditambahkan.');
    }

    public function edit_suratkehilangan($id_suratketeranganhilang)
    {
        $data['kehilangan'] = $this->model->find($id_suratketeranganhilang);
        return view('pages/admin/edit_suratkehilangan', $data);
    }

    public function update_suratkehilangan($id_suratketeranganhilang)
    {
        $data = [
            'no_surat' => $this->request->getPost('no_surat'),
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'nik' => $this->request->getPost('nik'),
            'agama' => $this->request->getPost('agama'),
            'alamat' => $this->request->getPost('alamat'),
            'tanggal_hilang' => $this->request->getPost('tanggal_hilang'),
            'lokasi_hilang' => $this->request->getPost('lokasi_hilang'),
            'keperluan' => $this->request->getPost('keperluan'),
            'tanggal_surat' => $this->request->getPost('tanggal_surat'),
            'nama_kepala_desa' => $this->request->getPost('nama_kepala_desa'),
        ];

        $this->model->update($id_suratketeranganhilang, $data);
        return redirect()->to('/admin/tabel_keteranganhilang')->with('message', 'Data Surat Kehilangan berhasil diubah');
    }

    public function delete_suratkehilangan($id_suratketeranganhilang)
    {
        $this->model->delete($id_suratketeranganhilang);
        return redirect()->to('/suratketeranganhilang')->with('message', 'Data berhasil dihapus');
    }
}
