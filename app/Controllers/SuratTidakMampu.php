<?php

namespace App\Controllers;

use App\Models\SuratTidakMampuModel;
use CodeIgniter\Controller;

class SuratTidakMampu extends Controller
{
    protected $suratModel;

    public function __construct()
    {
        $this->suratModel = new SuratTidakMampuModel();
    }

    public function index()
    {
        $data['surat_tidak_mampu'] = $this->suratModel->findAll();
        return view('SuratTidakMampu/index', $data);
    }

    public function create()
    {
        return view('SuratTidakMampu/create');
    }

    public function store()
    {
        $this->suratModel->save([
            'no_surat'        => $this->request->getPost('no_surat'),
            'nama'            => $this->request->getPost('nama'),
            'nik'             => $this->request->getPost('nik'),
            'tempat_lahir'    => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir'   => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin'   => $this->request->getPost('jenis_kelamin'),
            'agama'           => $this->request->getPost('agama'),
            'alamat'          => $this->request->getPost('alamat'),
            'status_kemampuan'=> $this->request->getPost('status_kemampuan'),
            'keperluan'       => $this->request->getPost('keperluan'),
            'tanggal_surat'   => $this->request->getPost('tanggal_surat'),
            'nama_kepala_desa'=> $this->request->getPost('nama_kepala_desa'),
            'tanda_tangan'    => $this->request->getPost('tanda_tangan'),
            'stempel'         => $this->request->getPost('stempel'),
        ]);

        return redirect()->to('/surat-tidak-mampu')->with('message', 'Surat berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['surat'] = $this->suratModel->find($id);
        return view('SuratTidakMampu/edit', $data);
    }

    public function update($id)
    {
        $this->suratModel->update($id, [
            'no_surat'        => $this->request->getPost('no_surat'),
            'nama'            => $this->request->getPost('nama'),
            'nik'             => $this->request->getPost('nik'),
            'tempat_lahir'    => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir'   => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin'   => $this->request->getPost('jenis_kelamin'),
            'agama'           => $this->request->getPost('agama'),
            'alamat'          => $this->request->getPost('alamat'),
            'status_kemampuan'=> $this->request->getPost('status_kemampuan'),
            'keperluan'       => $this->request->getPost('keperluan'),
            'tanggal_surat'   => $this->request->getPost('tanggal_surat'),
            'nama_kepala_desa'=> $this->request->getPost('nama_kepala_desa'),
            'tanda_tangan'    => $this->request->getPost('tanda_tangan'),
            'stempel'         => $this->request->getPost('stempel'),
        ]);

        return redirect()->to('/surat-tidak-mampu')->with('message', 'Surat berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->suratModel->delete($id);
        return redirect()->to('/surat-tidak-mampu')->with('message', 'Surat berhasil dihapus.');
    }
}
