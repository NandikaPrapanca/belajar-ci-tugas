<?php

namespace App\Controllers;

use App\Models\ProductCategoryModel;

class ProductCategoryController extends BaseController
{
    protected $productCategory;

    public function __construct()
    {
        $this->productCategory = new ProductCategoryModel();
    }

    public function index()
    {
        $categories = $this->productCategory->findAll();
        $data['product_category'] = $categories;

        return view('v_product_category', $data);  // pastikan nama view sesuai
    }

    // function create data
    public function create()
    {
        $dataForm = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'deskripsi'     => $this->request->getPost('deskripsi'),
            'harga'         => $this->request->getPost('harga'),
            'updated_at'    => date("Y-m-d H:i:s"),
        ];

        $this->productCategory->insert($dataForm);

        return redirect('product_category')->with('success', 'Data Berhasil Ditambah');
    }

    // function edit data
    public function edit($id)
    {
        $dataForm = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'deskripsi'     => $this->request->getPost('deskripsi'),
            'harga'         => $this->request->getPost('harga'),
            'updated_at'    => date("Y-m-d H:i:s"),
        ];

        $this->productCategory->update($id, $dataForm);

        return redirect('product_category')->with('success', 'Data Berhasil Diubah');
    }

    // function delete data
    public function delete($id)
    {
        $this->productCategory->delete($id);

        return redirect('product_category')->with('success', 'Data Berhasil Dihapus');
    }
}
