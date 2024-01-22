<?php
$sql = "SELECT * FROM tabelkategori";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Judul Artikel: " . $row['judul_artikel'] . " - Kategori: " . $row['kategori'] . " - Status: " . $row['status1'] . "<br>";
    }
} else {
    echo "data tidak ditemukan";
}
