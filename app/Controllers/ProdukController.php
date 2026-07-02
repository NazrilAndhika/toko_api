<?php

namespace App\Controllers;
use App\Models\MProduk;

class ProdukController extends RestfullController
{

    public function create()
    {
        $data = [
            'kode_produk' => $this->request->getVar('kode_produk'),
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga')
        ];

        $model = new MProduk();
        $model->insert($data);

        $produk = $model->find($model->getInsertID());
        return $this->responseHasil(200, true, $produk);
    }

    public function list()
    {
        $model = new MProduk();
        $produk = $model->findAll();
        return $this->responseHasil(200, true, $produk);
    }

    public function detail($id)
    {
        $model = new MProduk();
        // Pakai find($id), bukan findAll($id) untuk ambil 1 data
        $produk = $model->find($id);
        return $this->responseHasil(200, true, $produk);
    }

    public function ubah($id) {
    $model = new MProduk();
    
    $input = [];

    // 1. Coba baca sebagai JSON murni dengan proteksi try-catch agar tidak crash
    try {
        $input = $this->request->getJSON(true);
    } catch (\CodeIgniter\HTTP\Exceptions\HTTPException $e) {
        // Jika gagal parse JSON, biarkan $input tetap array kosong
        $input = [];
    }

    // 2. Jika JSON kosong atau gagal di-parse, ambil lewat getRawInput (x-www-form-urlencoded)
    if (empty($input)) {
        $input = $this->request->getRawInput();
    }

    // 3. Petakan datanya
    $data = [
        'kode_produk' => $input['kode_produk'] ?? null,
        'nama_produk' => $input['nama_produk'] ?? null,
        'harga'       => $input['harga'] ?? null,
    ];

    // 4. Validasi pelindung: Jangan jalankan update jika data tidak terbaca sama sekali
    if (is_null($data['kode_produk']) && is_null($data['nama_produk']) && is_null($data['harga'])) {
        return $this->responseHasil(400, false, [
            'message' => 'Gagal mengubah data. Format data yang dikirim Flutter tidak dikenali oleh server.',
            'debug_input' => $input
        ]);
    }

    // 5. Bersihkan kolom yang bernilai null agar tidak menimpa data lama di database
    $dataFiltered = array_filter($data, function($value) {
        return !is_null($value);
    });
    
    // 6. Eksekusi update ke database jika ada perubahan
    if (!empty($dataFiltered)) {
        $model->update($id, $dataFiltered);
    }
    
    // 7. Kembalikan data terbaru
    $produk = $model->find($id);
    
    return $this->responseHasil(200, true, $produk);
}

    public function hapus($id)
    {
        $model = new MProduk();
        // Ambil datanya dulu sebelum dihapus agar bisa ditampilkan di respon
        $produk = $model->find($id);
        $model->delete($id);
        return $this->responseHasil(200, true, $produk);
    }
}