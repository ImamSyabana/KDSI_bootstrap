<?php 
    $username = $_GET['username'];
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
    <link rel="stylesheet" href="berhasil_login.css?v=<?php echo time(); ?>">
    <title>berhasil login</title>
</head>
<body>
    <div class = "header">
    <div class="logo_bg"></div><div class="tulis">
        <div class="judul"><h2>Selamat kamu berhasil login</h2></div>
        <ul class="links">
        <li>Silahkan masuk ke aplikasi<?php echo "<a href='menu_utama_santri.php?username=$username'>menu utama aplikasi </a></li>"?>
        </ul>
    <div class="active"></div>
    </div></div>
    </div>
</body>
</html>
