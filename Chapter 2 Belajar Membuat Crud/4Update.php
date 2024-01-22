<?
if(isset($_POST['edit'])) {
	$id = $_POST['id'];
	$judul_artikel = $_POST['Judul Artikel'];
	$kategori = $_POST['Kategori'];
	$status1 = $_POST['Status'];

	$sql = "UPDATE tabelkategori SET judul_artikel='$judul_artikel', kategori='$kategori', status1='$status1' WHERE id=$id";
	$result = mysqli_query($conn, $sql);

	if($result) {
		echo "Data berhasil diubah.";
	} else {
		echo "Data gagal diubah: " . mysqli_error($conn);
	}
}
