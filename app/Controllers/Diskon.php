<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DiskonModel;

class Diskon extends BaseController
{
    protected $diskonModel;

    public function __construct()
    {
        $this->diskonModel = new DiskonModel();
    }

    // Tampilkan semua data diskon
    public function index()
    {
        // Hanya admin yang boleh akses
        if (session('role') !== 'admin') {
            return redirect()->to('/')->with('error', 'Akses ditolak!');
        }

        $data['diskon'] = $this->diskonModel->findAll();
        return view('diskon/index', $data);
    }

    // Tampilkan form tambah
    public function create()
    {
        if (session('role') !== 'admin') {
            return redirect()->to('/');
        }

        return view('diskon/create');
    }

    // Proses simpan data diskon
    public function store()
    {
        if (session('role') !== 'admin') {
            return redirect()->to('/');
        }

        $validationRules = [
            'tanggal' => 'required|is_unique[diskon.tanggal]',
            'nominal' => 'required|numeric'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->diskonModel->insert([
            'tanggal' => $this->request->getPost('tanggal'),
            'nominal' => $this->request->getPost('nominal'),
        ]);

        return redirect()->to('/diskon')->with('success', 'Diskon berhasil ditambahkan');
    }

    // Tampilkan form edit
    public function edit($id)
    {
        if (session('role') !== 'admin') {
            return redirect()->to('/');
        }

        $data['diskon'] = $this->diskonModel->find($id);
        return view('diskon/edit', $data);
    }

    // Proses update diskon
    public function update($id)
    {
        if (session('role') !== 'admin') {
            return redirect()->to('/');
        }

        $validationRules = [
            'nominal' => 'required|numeric'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->diskonModel->update($id, [
            'nominal' => $this->request->getPost('nominal'),
        ]);

        return redirect()->to('/diskon')->with('success', 'Diskon berhasil diupdate');
    }

    // Hapus data
    public function delete($id)
    {
        if (session('role') !== 'admin') {
            return redirect()->to('/');
        }

        $this->diskonModel->delete($id);
        return redirect()->to('/diskon')->with('success', 'Diskon berhasil dihapus');
    }
}

