<?php
    include("connect.php");    
?>

<!DOCTYPE html>
<html lang="en">
<div class="atas">
    <top><img src="image/logo pp dream.png" width="110px" height="100px">
     <img class="logo" src="image/logo2.png" width="200px" height="70px"></top>
     <div class="kotak"></div>
     <div class="icon">
     <p class="pencet">LOG OUT
		<a href="logout.php?page=info_pembayaran.php" class="logout"><img src="image/box-arrow-in-right.svg"></a>
     </p>
     </div>
</div>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="info.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="bg.css?v=<?php echo time(); ?>">
    <title>Info Pembayaran</title>
</head>
</head>
<body>
    <div class = "header">
    <div class="logo_bg"></div>
    <div class="samping">
        <ul class="links">
            <li><a href="info_pembayaran.php?page=infopembayaran">Info Pembayaran </a></li>
            <li><a href="keuangan.php?page=keuangan">Keuangan </a></li>
            <li><a href="pengurus_pondok.php?page=penguruspondok">Pengurus Pondok </a></li>
            <li><a href="data_santri.php?page=datasantri">Data santri</a></li>
            <br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
            <div class="batas"></div>
            <li><a href="menu_utama_admin.php?page=menu">Kembali Ke Menu Utama</a></li>
            <div class="active"></div>
        </ul>
    </div>
    <div class="isi">
    <form action="info_pembayaran.php" method="post" name="info_bayar">
        <p class="tombol"><i>Klik tombol dibawah ini untuk memasukkan data info pembayaran Santri (staff only)</i>
        <a href="input_info_pembayaran.php">Info Pembayaran</a></p>
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
        <table border="1" class="tabel">
        <tr>
        <td>
            <p><b>NO</b></p>        
        </td>
        <td>
            <p><b>NAMA  LENGKAP  SANTRI</b></p>
        </td>
        <td>
            <p><b>BULAN</b></p>        
        </td>
        <td>
            <p><b>TARIF SPP </b></p>        
        </td>
        <td>
            <p><b>LAINNYA</b></p>        
        </td>
        <td>
            <p><b>CATATAN</b></p>        
        </td>
        <td>
            <p><b>TOTAL</b></p>        
        </td>

        <td>
            <p><b>STATUS</b></p>        
        </td>
        <td>
        <p><b>MANIPULASI DATA</b></p>        
        </td></div>
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
            echo "<td><p class='nomor'>".$user_data->no."</p></td>";
            echo "<td><p>".$user_data->namasantri."</p></td>";
            echo "<td><p>".$user_data->bulan."</p></td>";
            echo "<td><p>".$user_data->tarif."</p></td>";
            echo "<td><p>".$user_data->lainnya."</p></td>";
            echo "<td><p>".$user_data->catatan."</p></td>";
            echo "<td><p>".$user_data->tarif + $user_data->lainnya."</p></td>";
            echo "<td><p>".$user_data->status."</p></td>";
            echo "<td><p><a href='edit_infopembayaran.php?no=$user_data->no'>edit</a>";
            echo "<a href='delete_infopembayaran.php?no=$user_data->no'> || Hapus</a></p></td></tr>";
        }
    }else{      
            $result = mysqli_query($mysqli,"SELECT * FROM infopembayaran");
            while ($obj = $result->fetch_object()) {
                $baris[] = $obj;    
            }
            foreach($baris as $user_data) {   
                echo "<tr>";
            echo "<td><p>".$user_data->no."</p></td>";
            echo "<td><p>".$user_data->namasantri."</p></td>";
            echo "<td><p>".$user_data->bulan."</p></td>";
            echo "<td><p>".$user_data->tarif."</p></td>";
            echo "<td><p>".$user_data->lainnya."</p></td>";
            echo "<td><p>".$user_data->catatan."</p></td>";
            echo "<td><p>".$user_data->tarif + $user_data->lainnya."</p></td>";
            echo "<td><p>".$user_data->status."</p></td>";
            echo "<td><p><a href='edit_infopembayaran.php?no=$user_data->no'>edit</a>";
            echo "<a href='delete_infopembayaran.php?no=$user_data->no'> || Hapus</a></p></td></tr>";
    }
}
        ?>
        </table>
    </form>
    </div>
    </div>
</body>
</html>

