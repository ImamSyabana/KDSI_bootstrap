<?php include("connect.php");?>

<!DOCTYPE html>
<html lang="en">
<div class="atas">
    <top><img src="image/logo pp dream.png" width="110px" height="100px">
     <img class="logo" src="image/logo2.png" width="200px" height="70px"></top>
     <div class="kotak"></div>
     <div class="icon">
     <p class="pencet">LOG OUT
			<a href="logout.php?page=input_info_pembayaran.php" class="logout"><img src="image/box-arrow-in-right.svg"></a>
     </p>
     </div>
</div>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bg.css?v=<?php echo time(); ?>">
    <title>input data pembayaran</title>
</head>
<body>
    <div class = "header">
    <div class="logo_bg"></div>
        <h2>SILAHKAN MASUKKAN DATA PEMBAYARAN SANTRI</h2>
    
    
    <form method = "POST" action = "input_info_pembayaran.php" >    
        
        <table width = "30%" border = "0">
        
        <div class = "input-group">
        <tr>
        <td><label>Nama lengkap Santri</label></td>
        <td><input type = "text" name = "namasantri" required ></td>
        </tr>
        </div>

        <div class = "input-group">
        <tr>
        <td><label>email</label></td>
        <td><input type = "email" name="email" required></td>
        </tr>
        </div>

        <div class = "input-group">
        <tr>
        <td><label>Tarif SPP</label></td>
        <td><input type = "text" name = "tarif" required></td>
        </tr>
        </div>

        <div class = "input-group">
        <tr>
        <td><label>Status</label></td>
        <td><input type = "text" name = "status" required></td>
        </tr>
        </div>

        <div class = "input-group">
        <tr>
        <td><label>Bulan</label></td>
        <td><input type = "text" name = "bulan" required></td>
        </tr>
        </div>

        <div class = "input-group">
        <tr>
        <td><label>Tahun</label></td>
        <td><input type = "text" name = "tahun" required></td>
        </tr>
        </div>

        <div class = "input-group">
        <tr>
        <td><label>Pembayaran lainnya</label></td>
        <td><input type = "text" name = "lainnya" required></td>
        </tr>
        </div>
        
        <div class = "input-group">
        <tr>
        <td><label>Keterangan pembayaran lainnya</label></td>
        <td><input type = "text" name = "catatan" required></td>
        </tr>
        </div>
        <div class = "input-group">
        <tr>
        <td><button type = "submit" name = "register" class = "button">Masukkan data</button></td>
        </tr>
        </div>

        <div class = "input-grup">
        <p class="kembali">
        <tr>
            <a href = "info_pembayaran.php">kembali</a>
            
            </tr>
            </p>

        </div>
        </table>
    </form>

    <?php
    include_once("connect.php");
    if (isset($_POST['register'])){
        $namasantri = $_POST['namasantri'];
        $email = $_POST['email'];
        $tarif = $_POST['tarif'];
        $status = $_POST['status'];
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        $lainnya = $_POST['lainnya'];
        $catatan = $_POST['catatan'];
        $result = mysqli_query($mysqli, "INSERT INTO infopembayaran(namasantri,email,tarif,status,bulan,tahun,lainnya,catatan) 
        VALUES('$namasantri','$email', '$tarif','$status', '$bulan', '$tahun', '$lainnya','$catatan');");
        echo "Data pembayaran santri berhasil dicatat. <a href='info_pembayaran.php'> lanjut</a>";
    }   
    ?>
    
</body>
</html>