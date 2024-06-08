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
            background-color: #f4f4f4;
            color: #333;
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
            width: 102%;
        }
        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center; 
            padding: 20px;
        }
        .feature {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .feature h2 {
            margin-bottom: 10px;
        }
        .feature p {
            margin-bottom: 20px;
        }
        .cta-button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .cta-button:hover {
            background-color: #2980b9;
        }
        header a.logout {
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
    background-color: #e74c3c; /* Warna latar merah */
    transition: background-color 0.3s ease; /* Efek transisi */
        }

       header a.logout:hover {
       background-color: #c0392b; /* Warna latar merah yang lebih gelap saat digulirkan */
       }

    </style>
</head>
<body>
<header>
    <img src="logo.jpeg" alt="Logo" class="logo">
    <h1>ZYIEMBOYS</h1> 
    <a href="daftar.php" class="logout">Logout</a>
</header>


    <nav>
        <a href="">Beranda</a>
        <a href="profil.html">Profil</a>
        <a href="member.php">Member</a>
        <a href="notifikasi.html">Notifikasi</a>
    </nav>
    <div class="content">
        <div class="feature">
            <h2>Penawaran Spesial</h2>
            <p>Dapatkan diskon hingga 50% untuk langganan bulanan!</p>
            <a href="diskon.html" class="cta-button">Lihat Penawaran</a>
        </div>
        
        <div class="feature">
            <h2>Jadwal Kelas</h2>
            <p>Ikuti kelas fitnes favorit Anda, dari yoga hingga crossfit.</p>
            <a href="jadwal_kelas.html" class="cta-button">Lihat Jadwal</a>
        </div>
    <footer>
        <p>@zyiemboys.yahoo.com</p>
        <p>contact:085711238050</p>
    </footer>
</body>
</html>
