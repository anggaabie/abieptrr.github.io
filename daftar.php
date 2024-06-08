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
            background-image: url('background.jpeg');
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
            background-color: rgba(0, 0, 0, 0.5);
        }
        .content .zyiemboys {
            font-size: 80px; 
            margin-bottom: 10px; 
        }
        .content a {
            color: white;
            text-decoration:underline ;
        }
        form {
    background-color: rgba(255, 255, 255, 0.2); 
    padding: 20px; 
    border-radius: 10px;
    width: 300px;
}

label {
    display: block; 
    margin-bottom: 5px; 
}

input[type="text"],
input[type="password"] {
    width: 100%; 
    padding: 8px;
    margin-bottom: 10px; 
    border-radius: 5px; 
    border: none; 
}

input[type="submit"] {
    width: 100%; 
    padding: 10px; 
    border-radius: 5px; 
    border: none; 
    background-color: #3498db; 
    color: white; 
    cursor: pointer; 
}

input[type="submit"]:hover {
    background-color: #2980b9; 
}


p {
    margin-top: 20px; 
    color: #ffffff; 
}

a {
    color: #ffffff; 
    text-decoration: underline; 
}

a:hover {
    color: #cccccc; 
}
    </style>
</head>
<body>
    <header>
        <img src="logo.jpeg" alt="Logo" class="logo">
        <h1>ZYIEMBOYS</h1> 
    </header>
    <nav>
        <a href="#"></a>
        <a href="profil.php"></a>
        <a href="member.php"></a>
        <a href="#"></a>
    </nav>
    <div class="content">
    <form action="proses_daftar.php" method="post">
        <h1>DAFTAR</h1>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        
        <label for="phone">Nomor Telepon:</label><br>
        <input type="text" id="phone" name="no_tlp"><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        
        <input type="submit" value="Daftar">
        <p>Sudah memiliki akun? <a href="login.php">Login</a></p>
    </form>
</div>
    </div>
    <footer>
        
    </footer>
</body>
</html>
