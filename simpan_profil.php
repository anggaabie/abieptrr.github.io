<?php
$koneksi = mysqli_connect("localhost", "root", "", "zyiemboys");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}
$nama = $_POST['nama'];
$tujuan = $_POST['tujuan'];
$tinggi_badan = $_POST['tinggi_badan'];
$berat_badan = $_POST['berat_badan'];

$query = "INSERT INTO profil (nama, tujuan_kebugaran, tinggi_badan, berat_badan) VALUES ('$nama', '$tujuan', '$tinggi_badan', '$berat_badan')";

if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
