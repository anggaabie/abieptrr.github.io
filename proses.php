<?php

$conn = new mysqli("localhost", "root", "", "zyiemboys");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM daftar WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: tampilan.php");
} else {
    header("Location: login.php?error=1");
}

$conn->close();
?>