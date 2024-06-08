<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="zyiemboys";

$conn = new mysqli ($servername, $username ,$password, $dbname);

if ($conn->connect_error) {
    die("koneksi gagal:" .$conn->connect_error);
}

$username = isset($_POST['username']) ? $_POST['username'] : '';
$no_tlp = isset($_POST['no_tlp']) ? $_POST['no_tlp'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$sql = "INSERT INTO daftar (username, no_tlp, password) VALUES ('$username','$no_tlp','$password')";

if ($conn->query($sql) == TRUE) {
    header("location:tampilan.php");
    exit();
}else {
    echo "error: ".$sql. "<br>" .$conn->error;
}

$conn->close();
?>
