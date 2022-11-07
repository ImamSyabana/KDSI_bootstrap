<?php include("connect.php");?>

<!DOCTYPE html>
<html lang="en">
<div class="atas">
    <top><img src="image/logo pp dream.png" width="110px" height="100px">
     <img class="logo" src="image/logo2.png" width="200px" height="70px"></top>
     <div class="kotak"></div>
     <div class="icon">
     <p class="pencet">LOG OUT
			<a href="logout.php?page=input_datasantri.php" class="logout"><img src="image/box-arrow-in-right.svg"></a>
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
        <h2>SILAHKAN MASUKKAN DATA SANTRI</h2>
    
    
    <form method = "POST" action = "input_datasantri.php" >    
        
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
        <td><input type = "email" name = "email" required></td>
        </tr>
        </div>
        <div class = "input-group">
        <tr>
        <td><label>tanggal lahir</label></td>
        <td><input type = "date" name = "tgl_lahir" required></td>
        </tr>
        </div>

        <div class = "input-group">
        <tr>
            <?php
                $klmn = ['laki-laki','perempuan'];
            ?>
        <td><label>jenis kelamin</label></td>
        <td>
        <select name="kelamin">
            <option value="">...</option>
            <?php 
                for($i=0;$i<2;$i++){
                    echo "<option value= '".$klmn[$i]."'>".$klmn[$i]."</option>";
                }
            ?>
        </select>
        </td>
        </tr>
        </div>
        <div class = "input-group">
        <tr>
        <td><label>nomor telepon</label></td>
        <td><input type = "text" name = "tlpn" required></td>
        </tr>
        </div>
        <div class = "input-group">
        <tr>
        <td><label>alamat</label></td>
        <td><input type = "text" name = "alamat" required></td>
        </tr>
        </div>

        <div class = "input-group">
        <tr>
        <td><label>tanggal masuk</label></td>
        <td><input type = "date" name = "tgl_masuk" required></td>
        </tr>
        </div>

        <div class = "input-group">
        <tr>
        <td><label>status</label></td>
        <td><input type = "text" name = "status" required></td>
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
            <a href = "data_santri.php">kembali</a>
            
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
        $tgl_lahir= $_POST['tgl_lahir'];
        $kelamin = $_POST['kelamin'];
        $tlpn = $_POST['tlpn'];
        $alamat = $_POST['alamat'];
        $tgl_masuk = $_POST['tgl_masuk'];
        $status = $_POST['status'];
        $result = mysqli_query($mysqli, "INSERT INTO datasantri(namasantri,email,tgl_lahir,kelamin,tlpn,alamat,tgl_masuk,status) 
        VALUES('$namasantri','$email', '$tgl_lahir','$kelamin', '$tlpn', '$alamat', '$tgl_masuk','$status');");
        echo "Data santri berhasil dicatat. <a href='data_santri.php'> lanjut</a>";
    }   
    ?>
    
</body>
</html>