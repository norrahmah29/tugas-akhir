<?php

namespace App\Controllers\Masyarakat;

use App\Controllers\BaseController;
use App\Models\ArsipModel;

class Arsip extends BaseController
{
    public function index()
    {
        $arsipModel = new ArsipModel();
        $data['arsip'] = $arsipModel->findAll(); // Menampilkan semua data arsip
        return view('masyarakat/arsip_surat', $data);
    }

    public function download($id)
    {
        $arsipModel = new ArsipModel();
        $data = $arsipModel->find($id);

        if ($data) {
            $filePath = WRITEPATH . 'uploads/' . $data['file']; // Sesuaikan path jika beda
            return $this->response->download($filePath, null);
        } else {
            return redirect()->back()->with('error', 'File tidak ditemukan.');
        }
    }
}
