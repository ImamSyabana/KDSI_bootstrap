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
    <link rel="stylesheet" href="verif.css?v=<?php echo time(); ?>">
    <title>Verifikasi</title>
</head>
<body>
    <div class = "header">
    <div class="logo_bg"></div><div class="tulis">
        <div class="judul"><h2>VERIFIKASI</h2></div>
    <?php
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        echo "<p class='gagal'><font color='#FF0000'>{$_GET['pesan']}</font></p>";
    }else{
        $pesan = " ";
    }
    ?>
    
    <form method = "POST" action ="verif.php">    
        <div class="isi">
            <label>Silahkan Masukkan Kode Verifikasi</label>
            <div class="spasi"><input type = "text" name = "verifCode" ></div>
            <div class="spasi"><input type = "submit" name = "verif" value = "kirim kode" ></div>
        </div>
        </table>
    </form>
    
    </div></div>
    <?php
    include_once("connect.php");
    if(isset($_POST['verif'])){
        $verifCode = $_POST['verifCode'];
        $result = mysqli_query($mysqli,"SELECT * FROM administrator WHERE verifCode = '$verifCode';");
        if(mysqli_num_rows($result) == 1){
            echo "<p class='berhasil'>Kode Verifikasi Benar. <a href='admin_berhasil_login.php'> masuk</a></p>";
        }else {
            $pesan = urlencode("kode yang dimasukkan salah, silahkan cek dan masukkan kode kembali!!");
            header("Location:verif.php?pesan=$pesan");
        } 
}
    ?>
    </div>
</body>
</html>