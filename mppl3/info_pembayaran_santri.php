<?php
    include("connect.php");   
    $username = $_GET['username']; 
?>

<!DOCTYPE html>
<html lang="en">
<div class="atas">
    <top><img src="image/logo pp dream.png" width="110px" height="100px">
     <img class="logo" src="image/logo2.png" width="200px" height="70px"></top>
     <div class="kotak"></div>
     <div class="icon">
     <p class="pencet">LOG OUT
		<?php echo "<a href='logout.php?page=info_pembayaran_santri.php?username=$username' class='logout'>";?><img src="image/box-arrow-in-right.svg"></a>
     </p>
     </div>
</div>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="info_santri.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="bg.css?v=<?php echo time(); ?>">
    <title>Info Pembayaran</title>
</head>
</head>
<body>
    <div class = "header">
    <div class="logo_bg"></div>
    <div class="samping">
        <ul class="links">
            <li><a href="info_pembayaran_santri.php?page=infopembayaran">Info Pembayaran </a></li>
            <br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
            <div class="batas"></div>
            <li><?php echo "<a href='menu_utama_santri.php?username=$username'>Kembali Ke Menu Utama</a></li>";?>
            <div class="active"></div>
        </ul>
    </div>
    <div class="isi">
    <form action="info_pembayaran_santri.php" method="post" name="info_bayar">
        TAHUN :
        <select name="tahun">
			    <option value="">Pilih tahun...</option>
				<?php
					for($i=2022;$i<=2077;$i++){
					    echo "<option value= "."'".$i."'".">";
					    echo $i;
						echo "</option>";
					}
				?>
			    </select>
        <input type = "submit" name = "lihat" value = "lihat" >    
        <b><h2>DAFTAR PEMBAYARAN SANTRI</h2></span></b>
        <table width="100%" border="1" class="tabel">
        <tr>
        <td>
            <p ><b>NO</b></p>        
        </td>
        <td>
            <p class="up"><b>BULAN</b></p>        
        </td>
        <?php 
            if(!isset($_POST['lihat'])){
                echo "<td><p class='up'><b>TAHUN</b></p></td>";
            }
        ?>
        <td>
            <p class="up"><b>TARIF SPP </b></p>        
        </td>
        <td>
            <p class="up"><b>LAINNYA</b></p>        
        </td>
        <td>
            <p class="up"><b>CATATAN</b></p>        
        </td>
        <td>
            <p class="up"><b>TOTAL</b></p>        
        </td>

        </div>
        </tr> 
        <?php
        include_once("connect.php");
        if(isset($_POST['lihat'])){
           
            $tahun = $_POST['tahun'];
            $result = mysqli_query($mysqli,"SELECT * FROM infopembayaran WHERE tahun = '$tahun'");
            while ($obj = $result->fetch_object()) {
            $baris[] = $obj;    
        }
        foreach($baris as $user_data) {   
            echo "<tr>";
            echo "<td class='nomor'><p>".$user_data->no."</p></td>";
            echo "<td><p>".$user_data->bulan."</p></td>";
            echo "<td><p>".$user_data->tarif."</p></td>";
            echo "<td><p>".$user_data->lainnya."</p></td>";
            echo "<td><p>".$user_data->catatan."</p></td>";
            echo "<td><p>".$user_data->tarif + $user_data->lainnya."</p></td>";
        }
    }else{      
            $nama = mysqli_query($mysqli,"SELECT namasantri FROM datasantri WHERE username='$username'");
            while($objek = mysqli_fetch_array($nama)){
                $namasantri = $objek['namasantri'];
            }
            $result = mysqli_query($mysqli,"SELECT * FROM infopembayaran WHERE namasantri='$namasantri'");
            while ($obj = $result->fetch_object()) {
                $baris[] = $obj;    
            }
            foreach($baris as $user_data) {   
                echo "<tr>";
            echo "<td class='nomor'><p>".$user_data->no."</p></td>";
            echo "<td><p>".$user_data->bulan."</p></td>";
            echo "<td><p>".$user_data->tahun."</p></td>";
            echo "<td><p>".$user_data->tarif."</p></td>";
            echo "<td><p>".$user_data->lainnya."</p></td>";
            echo "<td><p>".$user_data->catatan."</p></td>";
            echo "<td><p>".$user_data->tarif + $user_data->lainnya."</p></td>";
    }
}
        ?>
        </table>
    </form>
    </div>
    </div>
</body>
</html>

