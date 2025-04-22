<?php

namespace App\Controllers;

use App\Models\SuratSuamiIstriModel;
use CodeIgniter\Controller;

class SuratSuamiIstri extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new SuratSuamiIstriModel();
    }

    public function index()
    {
        $data['suamiistri'] = $this->model->findAll();
        return view('suamiistri/index', $data);
    }

    public function create()
    {
        return view('suamiistri/create');
    }

    public function store()
    {
        $this->model->save($this->request->getPost());
        return redirect()->to('/suamiistri')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data['suamiistri'] = $this->model->find($id);
        return view('suamiistri/edit', $data);
    }

    public function update($id)
    {
        $this->model->update($id, $this->request->getPost());
        return redirect()->to('/suamiistri')->with('message', 'Data berhasil diperbarui');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to('/suamiistri')->with('message', 'Data berhasil dihapus');
    }
}
