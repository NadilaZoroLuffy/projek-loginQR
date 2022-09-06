<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Pembuka Div Conten -->
    <div class="conten">
        <h1>scoil far</h1>
        <!-- Pembuka Div Isi Konten -->
        <div class="isi-konten">
            <h2>Silahkan Login</h2>
            
            <label for="username">Username</label><br><br>
            <input type="text" placeholder="Masukkan Nama" name="username" id="username" class="control"><br><br>

            <label for="password">Password</label><br><br>
            <input type="password" placeholder="Masukkan Password" name="password" id="password" class="control"><br><br>

            <a href="http://"><button type="submit" name="submit" class="submit">Login</button><br></a>

            <p>Anda Belum Punya Akun?</p>
            <a href="login.php">Register</a>
            
            <!-- Penutup Div Isi Konten -->
        </div>
        
        <div class="kodeQR">
            <img src="img/11.png" width="310px" height="250px"><br><br>
            <h3>Login With QR Code</h3>
            <p>Scan This With Google Camera To Log In Instantly.</p>
        </div>
        <!-- Penutup Div Conten -->
    </div>
</body>
</html>