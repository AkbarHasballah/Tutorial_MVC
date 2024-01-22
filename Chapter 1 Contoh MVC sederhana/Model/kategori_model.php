<?php
class kategorimodel {
public function getProducts(){
    // koneksi ke dalam database
    $conn = new mysqli("localhost","username","password","dbname");

    //query untuk mengambil data produk
    $sql = "SELECT * FROM kategori";
    $result = $conn->query($sql);

    // return data produk
    $kategori= array();
    while ($row = $result->fetch_assoc()){
        $kategori[] =$row;
    }
    return $kategori;
}
}
