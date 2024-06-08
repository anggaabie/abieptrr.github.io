<?php
$koneksi = mysqli_connect("localhost", "root", "", "zyiemboys");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}
$nama = $_POST['nama'];
$email = $_POST['email'];
$paket = $_POST['paket'];
$metode_pembayaran = $_POST['metode_pembayaran'];

$query = "INSERT INTO member (nama, email, paket, metode_pembayaran) VALUES ('$nama', '$email', '$paket', '$metode_pembayaran')";

if (mysqli_query($koneksi, $query)) {
    // Jika berhasil berlangganan, arahkan pengguna kembali ke halaman beranda dengan parameter subscribed=true
    header("Location: tampilan.php?subscribed=true");
    exit; // Penting untuk menghentikan eksekusi skrip setelah melakukan pengalihan halaman
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
