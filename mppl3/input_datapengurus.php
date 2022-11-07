<?php include("connect.php");?>

<!DOCTYPE html>
<html lang="en">
<div class="atas">
    <top><img src="image/logo pp dream.png" width="110px" height="100px">
     <img class="logo" src="image/logo2.png" width="200px" height="70px"></top>
     <div class="kotak"></div>
     <div class="icon">
     <p class="pencet">LOG OUT
			<a href="logout.php?page=input_datapengurus.php" class="logout"><img src="image/box-arrow-in-right.svg"></a>
     </p>
     </div>
</div>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bg.css?v=<?php echo time(); ?>">
    <title>input data pengurus</title>
</head>
<body>
    <div class = "header">
    <div class="logo_bg"></div>
        <h2>SILAHKAN MASUKKAN DATA PENGURUS</h2>
    
    
    <form method = "POST" action = "input_datapengurus.php" >    
        
        <table width = "30%" border = "0">
        
        <div class = "input-group">
        <tr>
        <td><label>Nama Lengkap Penngurus</label></td>
        <td><input type = "text" name = "namasantri" required ></td>
        </tr>
        </div>
        <div class = "input-group">
        <tr>
        <td><label>Tahun Dilantik</label></td>
        <td><input type = "text" name = "periode" required></td>
        </tr>
        </div>
        <div class = "input-group">
        <tr>
        <td><label>Bidang Kepengurusan</label></td>
        <td><input type = "text" name = "bidang" required></td>
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
            <a href = "pengurus_pondok.php">kembali</a>
            </tr>
            </p>

        </div>
        </table>
    </form>

    <?php
    include_once("connect.php");
    if (isset($_POST['register'])){
        $namasantri = $_POST['namasantri'];
        $periode = $_POST['periode'];
        $bidang= $_POST['bidang'];
        $result = mysqli_query($mysqli, "INSERT INTO pengurus(namasantri,periode,bidang) 
        VALUES('$namasantri','$periode', '$bidang');");
        echo "Data pengurus berhasil dicatat. <a href='pengurus_pondok.php'> lanjut</a>";
    }   
    ?>
    
</body>
</html>