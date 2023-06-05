<?php

namespace App\Models;

use CodeIgniter\Model;

class Beranda extends Model
{

    protected $DBGroup = 'default';
    protected $table = 'berandas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_produk', 'warna', 'kategori', 'harga'];

    // protected $validationRules = [
    //     'nama_produk' => 'required',
    //     'warna' => 'required',
    //     'kategori' => 'permit_empty|string',
    //     'harga' => 'required|numeric',
    // ];
}
