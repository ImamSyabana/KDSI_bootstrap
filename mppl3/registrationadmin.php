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
    <link rel="stylesheet" href="regist.css?v=<?php echo time(); ?>">
    <title>Halaman Registrasi akun admin</title>
</head>
<body>
    <div class = "header">
    <div class="logo_bg"></div><div class="tulis">
        <div class="judul"><h2>DAFTAR SEBAGAI ADMIN</h2></div>
        <ul class="links">
        <li>Bukan admin baru dan sudah memiliki akun admin?<a href = "loginadmin.php">Login</a></li>
        <li>Kembali ke halaman awal<a href = "index.php">go home</a></li>
        </ul>
    <?php
    
    ?>
    
    <form method = "POST" action = "registrationadmin.php">    
        <div class="isi">
            <label>Silahkan Masukkan Username Anda</label>
            <div class="spasi"><input type = "text" name = "username" required></div>
            <label>Silahkan Masukkan Password Anda</label>
            <div class="spasi"><input type = "password" name = "password" required></div>
            <label>Silahkan Masukkan Chat id telegram Anda</label>
            <div class="spasi"><input type = "text" name = "chat_id" required></div>
            <label>Silahkan Masukkan Email Anda</label>
            <div class="spasi"><input type = "email" name = "email" required></div>
            <div class="spasi"><input type = "submit" name = "register" value = "REGISTER" ></div>
        </div>
            
    
        </table>
    </form>
    
    </div></div>
    <?php
     if (isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $chat_id = $_POST['chat_id'];
        $password = $_POST['password'];
        $usernm = mysqli_query($mysqli, "SELECT*FROM administrator WHERE username='$username';");
        if(mysqli_num_rows($usernm)==0){
        $result = mysqli_query($mysqli, "INSERT INTO administrator(username,email,chat_id,password) VALUES('$username', '$email','$chat_id','$password');");
        if(!$result){
        	$pesan = urlencode("Email tidak boleh sama!!");
            header("Location: registrationadmin.php?pesan=$pesan");
        }elseif($result){
        echo "<p class='berhasil'>Registrasi berhasil. <a href='admin_berhasil_regist.php'>lanjut</a></p>";
    }}else{
        $pesan = urlencode("Username yang Anda masukkan sudah ada,<br></br>Silahkan ganti dengan username yang lain");
        header("Location: registrationadmin.php?pesan=$pesan");
    }}
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