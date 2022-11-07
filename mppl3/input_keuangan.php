<?php include("connect.php");?>

<!DOCTYPE html>
<html lang="en">
<div class="atas">
    <top><img src="image/logo pp dream.png" width="110px" height="100px">
     <img class="logo" src="image/logo2.png" width="200px" height="70px"></top>
     <div class="kotak"></div>
     <div class="icon">
     <p class="pencet">LOG OUT
			<a href="logout.php?page=input_keuangan.php" class="logout"><img src="image/box-arrow-in-right.svg"></a>
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
        <h2>SILAHKAN MASUKKAN DATA KEUANGAN PESANTREN</h2>
    
    
    <form method = "POST" action = "input_keuangan.php" >    
        
        <table width = "30%" border = "0">
        
        <div class = "input-group">
        <tr>
        <td><label>Keterangan keuangan</label></td>
        <td><input type = "text" name = "keterangan" required ></td>
        </tr>
        </div>

        <div class = "input-group">
        <tr>
        <td><label>Besar Mutasi</label></td>
        <td><input type = "text" name = "besarmutasi" required></td>
        </tr>
        </div>

        <div class = "input-group">
        <tr>
        <td><label>Jenis Mutasi</label></td>
        <?php
            $mutasi = ['pengeluaran','pemasukan']
        ?>
        <td><select name="jenismutasi">
            <option value="">...</option>
            <?php 
                for($i=0;$i<2;$i++){
                    echo "<option value= '".$mutasi[$i]."'>".$mutasi[$i]."</option>";
                }
            ?>
        </select></td>
        </tr>
        </div>

        <div class = "input-group">
        <tr>
        <td><label>Total saldo sebelumnya</label></td>
        <td><input type = "text" name = "totalkas"></td>
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
        <td><label>Bulan</label></td>
        <td><input type = "text" name = "bulan" required></td>
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
            <a href = "keuangan.php">kembali</a>
            
            </tr>
            </p>

        </div>
        </table>
    </form>

    <?php
    include_once("connect.php");
    if (isset($_POST['register'])){
        $keterangan = $_POST['keterangan'];
        $besarmutasi = $_POST['besarmutasi'];
        $jenismutasi = $_POST['jenismutasi'];
        $tahun = $_POST['tahun'];
        $bulan = $_POST['bulan'];
        if($jenismutasi == 'pengeluaran'){
            $totalkas = $_POST['totalkas']-$besarmutasi;
        }else{
            $totalkas = $_POST['totalkas']+$besarmutasi;
        }
        
        $result = mysqli_query($mysqli, "INSERT INTO keuangan(keterangan,besarmutasi,jenismutasi,totalkas,tahun,bulan) 
        VALUES('$keterangan','$besarmutasi', '$jenismutasi','$totalkas', '$tahun', '$bulan');");
        echo "Data keuangan pondok berhasil dicatat. <a href='keuangan.php'>lanjut</a>";
    }   
    ?>
    
</body>
</html>