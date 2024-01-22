<?php
if(isset($_POST['hapus'])) {
	$id = $_POST['id'];

	$sql = "DELETE FROM tabel WHERE id=$id";
	$result = mysqli_query($conn, $sql);

	if($result) {
		echo "Data berhasil dihapus.";
	} else {
		echo "Data gagal dihapus";}}
