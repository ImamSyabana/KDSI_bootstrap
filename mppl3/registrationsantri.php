<?php
    include("connect.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<div class="atas">
    <top><img src="image/logo pp dream.png" width="110px" height="100px">
     <img class="logo" src="image/logo2.png" width="200px" height="70px"></top>
</div>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bg.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="registsantri.css?v=<?php echo time(); ?>">
    <title>Halaman Registrasi akun santri</title>
</head>
<body>
    <div class = "header">
    <div class="logo_bg"></div><div class="tulis">
        <div class="judul"><h2>DAFTAR SEBAGAI SANTRI</h2></div>
        <ul class="links">
        <li>Bukan admin baru dan sudah memiliki akun admin?<a href = "loginsantri.php">Login</a></li>
        <li>Kembali ke halaman awal<a href = "index.php">go home</a></li>
        </ul>
    <?php
    
    ?>
    
    <form method = "POST" action = "registrationsantri.php">    
        <div class="isi">
            <label>Silahkan Masukkan Username Anda</label>
            <div class="spasi"><input type = "text" name = "username" required></div>
            <label>Silahkan Masukkan Email Anda</label>
            <div class="spasi"><input type = "email" name = "email" required></div>
            <label>Silahkan Masukkan Password Anda</label>
            <div class="spasi"><input type = "password" name = "password" required></div>           
            <div class="spasi"><input type = "submit" name = "register" value = "REGISTER" ></div>
        </div>
            
    
        </table>
    </form>
    
    </div></div>
    <?php
    
    if (isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $usernm = mysqli_query($mysqli, "SELECT * FROM datasantri where username= '$username';");
        $emel = mysqli_query($mysqli, "SELECT*FROM datasantri WHERE email='$email';");
        
        if(mysqli_num_rows($emel) == 1){
            if(mysqli_num_rows($usernm) == 0){
            $result = mysqli_query($mysqli, "UPDATE datasantri SET username='$username', password='$password' WHERE email='$email';");
            echo "<p class='berhasil'>Registrasi berhasil. <a href='santri_berhasil_regist.php'>lanjut</a></p>";}
            else{
        	$pesan = urlencode("Email yang Anda masukkan tidak sesuai dengan data dari pengurus,<br></br>Silahkan hubungi pengurus");
            header("Location: registrationsantri.php?pesan=$pesan");
            }
    
            }
            else{
                $pesan = urlencode("Username yang Anda gunakan sudah terpakai, <br></br>Silahkan ganti dengan menggunakan username yang lain");
                header("Location: registrationsantri.php?pesan=$pesan");}
        }
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        echo "<p class='gagal'>{$_GET['pesan']}</p>";
    }else{
        $pesan = " ";
    }
        
        


    ?>
    </div>
</body>
</html>