<?php

namespace App\Controllers;

use App\Models\DataJenis;

class Category extends BaseController
{
    public function __construct()
    {
        $this->dataJenis = new DataJenis();
    }

    public function index()
    {
        $data = [
            'title' => 'Category',
            'validation' => \Config\Services::validation(),
            'jenis' => $this->dataJenis->getData(),
        ];

        return view('category/index.php', $data);
    }

    public function simpan()
    {
        if (!$this->validate([
            'jenisbarang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis barang mohon diisi'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->to('/category')->withInput()->with('validation', $validation);
        }

        $simpan = [
            'jenisbarang' => $this->request->getVar('jenisbarang'),
        ];

        $this->dataJenis->save($simpan);

        session()->setFlashdata('yes', 'Data berhasil ditambah');
        return redirect()->to('/category');
    }

    public function edit()
    {
        if (!$this->validate([
            'jenisbarang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis barang mohon diisi'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->to('/category')->withInput()->with('validation', $validation);
        }

        $simpan = [
            "jenisbarang" => $this->request->getVar('jenisbarang'),
        ];
        $this->db->where('jenisbarang', $_POST['jenisbarang']);
        $this->db->update('jenisbarang', $simpan);
        $this->session->set_flashdata('sukses', "Data Berhasil Diedit");
        redirect('Category');
    }
    public function delete($id)
    {
        $this->dataJenis->delete($id);

        session()->setFlashdata('hapus', 'Data berhasil dihapus');
        return redirect()->to('/category');
    }
}