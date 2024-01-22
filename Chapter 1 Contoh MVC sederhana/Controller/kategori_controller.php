<?php
require_once 'kategori_model.php';

class kategoriController {
    public function index(){
// Memanggil model untuk mengambil data produk
$kategoriModel = new kategorimodel();
$kategori = $kategoriModel->getProducts();

//memanggil view untuk menampilkann data produk
include 'kategori_view.php';
    }
}
// Menampilkan Controller agar bisa tampil dihalaman daftar Produk
$kategoricontroller = new kategoriController();
$kategoricontroller -> index();
