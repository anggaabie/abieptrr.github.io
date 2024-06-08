<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style> 
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('bg.jpeg');
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            color: white; 
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #34495e; 
            color: white;
            padding: 10px 15px 25px;
            display: flex;
            align-items: center;
            justify-content: space-between; 
        }
        header img.logo {
            height: 40px; 
        }
        header h1 {
            margin: 0 auto;
            text-align: center; 
        }
        nav {
            background-color: #2c3e50; 
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
        }
        nav a:hover {
            background-color: #34495e; 
        }
        footer {
            background-color: #34495e; 
            color: white;
            text-align: center;
            padding: 1px 0;
            width: 100%;
        }
        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center; 
        }
        .container {
        background-color: rgba(255, 255, 255, 0.7);
        padding: 20px;
        border-radius: 10px;
        width: 25%;
        margin: 0 auto; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); 
    }

    .container h2 {
        margin-bottom: 20px;
        color: rgb(0, 0, 0);
    }

    .container label {
        color: rgb(0, 0, 0);
        margin-bottom: 10px; 
    }

    .container input[type="text"],
    .container input[type="email"],
    .container select {
        width: 90%;
        padding: 10px;
        margin-bottom: 10px;
        border: none;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.7);
        color: #333;
    }

    .container input[type="submit"] {
        background-color: #3498db;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .container input[type="submit"]:hover {
        background-color: #2980b9;
    }
    </style>
</head>
<body>
    <header>
        <img src="logo.jpeg" alt="Logo" class="logo">
        <h1>ZYIEMBOYS</h1> 
    </header>
    <nav>
        <a href="tampilan.php">Beranda</a>
        <a href="profil.html">Profil</a>
        <a href="">Member</a>
        <a href="#">Notifikasi</a>
    </nav>
    <div class="content">
        <div id="notification"></div>
        <div class="container">
            <h2>Berlangganan Keanggotaan</h2>
            <form action="" method="POST">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="paket">Pilih Paket Keanggotaan:</label>
                <select id="paket" name="paket">
                    <option value="harian">Paket 1 - harian(25.000)</option>
                    <option value="bulanan">Paket 2 - bulanan(350.000)</option>
                    <option value="setahun">Paket 3 - setahun(3.500.000)</option>
                </select>
    
                <label for="metode-pembayaran">Metode Pembayaran:</label>
                <select id="metode_pembayaran" name="metode_pembayaran">
                    <option value="cash">cash(langsung ke kasir,dan tunjukan kode member)</option>
                    <option value="transfer">Transfer Bank(BRI:574894378425780/BCA:6905366895) note:berikan bukti tf ke penjaga gym</option>
                </select>
    
                <input type="submit" value="Berlangganan">
            </form>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.querySelector('form');
        
                form.addEventListener('submit', function(event) {
                    event.preventDefault(); // Menghentikan perilaku bawaan form (reload halaman)
        
                    // Proses langganan di sini (mungkin perlu Ajax request ke backend)
        
                    // Tampilkan alert
                    alert('Selamat! Anda telah berhasil berlangganan.');
        
                    // Arahkan ke halaman beranda setelah pengguna menekan OK pada alert
                    window.location.href = 'tampilan.php'; // Ganti dengan URL halaman beranda yang benar
                });
            });
        </script>
        
        </div>
    </div>
    <footer>
        <p>@zyiemboys.yahoo.com</p>
        <p>contact:085711238050</p>
    </footer>
</body>
</html>
