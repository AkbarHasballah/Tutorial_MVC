<?php
if(isset($_POST['tambah'])) {
	$nama = $_POST['Judul Artikel'];
	$alamat = $_POST['Kategori'];
	$telepon = $_POST['Status1'];

	$sql = "INSERT INTO tabel (judul_artikel, kategori, status1) VALUES ('$judul_artikel', '$kategori', '$status1')";
	$result = mysqli_query($conn, $sql);

	if($result) {
		echo "Data berhasil ditambahkan.";
	} else {
		echo "Data gagal ditambahkan: " . mysqli_error($conn);
	}
}
