<?php

namespace App\Controllers;

use App\Models\Beranda;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\Request;
use CodeIgniter\Validation\Validator;

class BerandaController extends Controller
{
    protected $berandaModel;

    public function __construct()
    {
        $this->berandaModel = new Beranda();
    }

    public function index()
    {
        $data['beranda'] = $this->berandaModel->findAll();
        return view('beranda', $data);
    }

    public function about()
    {

        return view('template/about');
    }

    // public function store()
    // {
    //     $request = service('request');
    //     $data = $request->getPost();

    //     $validation = service('validation');
    //     $validation->setRules([
    //         'nama_produk' => 'required|string',
    //         'warna' => 'required|string',
    //         'kategori' => 'required|string',
    //         'harga' => 'required|numeric',
    //     ]);

    //     if (!$validation->withRequest($this->request)->run()) {
    //         return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    //     } else {
    //         $this->berandaModel->insert([
    //             'nama_produk' => $data['nama_produk'],
    //             'warna' => $data['warna'],
    //             'kategori' => $data['kategori'],
    //             'harga' => $data['harga']
    //         ]);

    //         return redirect()->to('/beranda')->with('success', 'Data berhasil ditambahkan.');
    //     }
    // }
    public function store()
    {
        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'warna' => $this->request->getPost('warna'),
            'kategori' => $this->request->getPost('kategori'),
            'harga' => $this->request->getPost('harga')
        ];

        if ($this->berandaModel->insert($data)) {
            return redirect()->to('/beranda')->with('success', 'Data berhasil ditambahkan.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan data.');
        }
    }

    public function edit($id)
    {
        $data['beranda'] = $this->berandaModel->find($id);
        return view('beranda', $data); // Ubah view yang digunakan menjadi 'edit_beranda'
    }

    public function update($id)
    {
        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'warna' => $this->request->getPost('warna'),
            'kategori' => $this->request->getPost('kategori'),
            'harga' => $this->request->getPost('harga')
        ];

        if ($this->berandaModel->update($id, $data)) {
            return redirect()->to('/beranda')->with('success', 'Data berhasil diperbarui.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui data.');
        }
    }

    public function delete($id)
    {
        if ($this->berandaModel->delete($id)) {
            return redirect()->to('/beranda')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus data.');
        }
    }
}
