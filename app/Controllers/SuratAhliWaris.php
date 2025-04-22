<?php

namespace App\Controllers;

use App\Models\AhliWarisModel;
use CodeIgniter\Controller;

class SuratAhliWaris extends Controller
{
    public function index()
    {
        $model = new AhliWarisModel();
        $data['ahliwaris'] = $model->findAll();

        return view('pages/admin/tabel_ahliwaris', $data);
    }

    public function form_suratahliwaris()
    {
        return view('pages/admin/form_suratahliwaris');
    }

    public function tambah()
    {
        $model = new AhliWarisModel();
        $data = $this->request->getPost();
        $model->insert($data);

        return redirect()->to('/surat_ahliwaris')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $model = new AhliWarisModel();
        $data['ahliwaris'] = $model->find($id);

        return view('pages/admin/edit_suratahliwaris', $data);
    }

    public function update($id)
    {
        $model = new AhliWarisModel();
        $data = $this->request->getPost();
        $model->update($id, $data);

        return redirect()->to('/surat-ahliwaris')->with('message', 'Data berhasil diperbarui');
    }

    public function hapus($id)
    {
        $model = new AhliWarisModel();
        $model->delete($id);

        return redirect()->to('/surat-ahliwaris')->with('message', 'Data berhasil dihapus');
    }
}
