<?php

namespace App\Controllers;

use App\Models\SuratDomisiliModel;
use CodeIgniter\Controller;

class SuratDomisili extends Controller
{
    protected $model;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->model = new SuratDomisiliModel();
    }

    public function index()
    {
        $data['surat_domisili'] = $this->model->findAll();
        return view('pages/admin/tabel_suratdomisili', $data);
    }

    public function generateSurat(){
        return view('pages/admin/tabel_suratdomisili/generate_domisili');
    }

    // public function form_suratdomisili()
    // {
    //     return view('pages/admin/form_suratdomisili');
    // }

    // public function tambah_suratdomisili()
    // {
    //     $this->model->save([
    //         'no_surat' => $this->request->getPost('no_surat'),
    //         'nama_gapoktan' => $this->request->getPost('nama_gapoktan'),
    //         'tgl_pembentukan' => $this->request->getPost('tgl_pembentukan'),
    //         'alamat' => $this->request->getPost('alamat'),
    //         'ketua' => $this->request->getPost('ketua'),
    //         'sekretaris' => $this->request->getPost('sekretaris'),
    //         'bendahara' => $this->request->getPost('bendahara'),
    //     ]);

    //     return redirect()->to('/suratdomisili')->with('message', 'Data berhasil ditambahkan.');
    // }

    // public function edit_suratdomisili($id_suratdomisili)
    // {
    //     $data['domisili'] = $this->model->find($id_suratdomisili);
    //     return view('pages/admin/edit_suratdomisili', $data);
    // }

    // public function update_suratdomisili($id_suratdomisili)
    // {
    //     $data = [
    //         'no_surat' => $this->request->getPost('no_surat'),
    //         'nama_gapoktan' => $this->request->getPost('nama_gapoktan'),
    //         'tgl_pembentukan' => $this->request->getPost('tgl_pembentukan'),
    //         'alamat' => $this->request->getPost('alamat'),
    //         'ketua' => $this->request->getPost('ketua'),
    //         'sekretaris' => $this->request->getPost('sekretaris'),
    //         'bendahara' => $this->request->getPost('bendahara'),
    //     ];

    //     $this->model->update($id_suratdomisili, $data);
    //     return redirect()->to('/admin/tabel_suratdomisili')->with('message', 'Data Domisili berhasil diubah');
    // }

    // public function delete_domisili($id_suratdomisili)
    // {
    //     $model = new SuratDomisiliModel();
    //     $model->delete($id_suratdomisili);
    //     return redirect()->to('/suratdomisili')->with('message', 'Data domisili berhasil dihapus');
    // }
}
