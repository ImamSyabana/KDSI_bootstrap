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
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
    <title>Halaman login akun santri</title>
</head>
<body>
    <div class = "header">
    <div class="logo_bg"></div><div class="tulis">
        <div class="judul"><h2>LOGIN</h2></div>
        <ul class="links">
        <li>Kamu santri baru dan belum memiliki akun ?<a href = "registrationsantri.php">Daftar</a></li>
        <li>Kembali ke halaman awal<a href = "index.php">go home</a></li>
        </ul>
    <?php
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        echo "<p class='gagal'><font color='#FF0000'>{$_GET['pesan']}</font></p>";
    }else{
        $pesan = " ";
    }
    ?>
    
    <form method = "POST" action = "loginsantri.php">    
        <div class="isi">
            <label>Silahkan Masukkan Username Anda</label>
            <div class="spasi"><input type = "text" name = "username" ></div>
            <label>Silahkan Masukkan Password Anda</label>
            <div class="spasi"><input type = "password" name = "password" ></div>
            <div class="spasi"><input type = "submit" name = "login" value = "login" ></div>
        </div>
        </table>
    </form>
    
    </div></div>
    <?php
    
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = mysqli_query($mysqli,"SELECT * FROM datasantri WHERE username = '$username' and password = '$password';");
        if(mysqli_num_rows($result) == 1){
            echo "<p class='berhasil'>Login berhasil. <a href='santri_berhasil_login.php?username=$username'> masuk</a></p>";
        }else {
            $pesan = urlencode("Username atau Password Salah, Silahkan Masukkan Kembali!!");
            header("Location: loginsantri.php?pesan=$pesan");
        } 
}
    ?>
    </div>
</body>
</html>