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
			<a href="logout.php?page=data_santri.php" class="logout"><img src="image/box-arrow-in-right.svg"></a>
     </p>
     </div>
</div>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="santri.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="bg.css?v=<?php echo time(); ?>">
    <title>Data Santri</title>
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
    <form action="data_santri.php" method="post" name="info_bayar">
        <p class="tombol"><i>Klik tombol dibawah ini untuk memasukkan data Santri (staff only)</i>
        <a href="input_datasantri.php">Input Data Santri</a></p>
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
        <input type = "text" name = "namasantri"> 
        <input type = "submit" name = "cari" value = "cari" >
        <b><h2>DAFTAR SANTRI</h2></span></b>
        <table border="1" class="tabel">
        <tr>
        <td>
            <p><b>NO</b></p>        
        </td>
        <td>
            <p><b>NAMA  LENGKAP  SANTRI</b></p>
        </td>
        <td>
            <p><b>USIA</b></p>        
        </td>
        <td>
            <p><b>JENIS KELAMIN</b></p>        
        </td>
        <td>
            <p><b>NOMOR TELEPON</b></p>        
        </td>
        <td>
            <p><b>ALAMAT</b></p>        
        </td>
        <td>
            <p><b>TANGGAL MASUK</b></p>        
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
            $result = mysqli_query($mysqli,"SELECT * FROM datasantri WHERE tahun = '$tahun'");
            while ($obj = $result->fetch_object()) {
            $baris[] = $obj;    
        }
        foreach($baris as $user_data) {   
            echo "<tr>";
            echo "<td><p class='nomor'>".$user_data->no."</p></td>";
            echo "<td><p>".$user_data->namasantri."</p></td>";
            $tgl_lhr = new DateTime($user_data->tgl_lahir);
            $sekarang = new DateTime();
            $umr = $sekarang->diff($tgl_lhr);
            echo "<td><p>".$umr->y." Tahun</p></td>";
            echo "<td><p>".$user_data->kelamin."</p></td>";
            echo "<td><p>".$user_data->tlpn."</p></td>";
            echo "<td><p>".$user_data->alamat."</p></td>";
            echo "<td><p>".date('d M Y',strtotime($user_data->tgl_masuk))."</p></td>";
            echo "<td><p>".$user_data->status."</p></td>";
            echo "<td><p><a href='edit_datasantri.php?no=$user_data->no'>edit</a>";
            echo "<a href='delete_datasantri.php?no=$user_data->no'> || Hapus</a></p></td></tr>";
        }
    }elseif(isset($_POST['cari'])){
        $namasantri = $_POST['namasantri'];
        $result = mysqli_query($mysqli,"SELECT * FROM datasantri WHERE namasantri = '$namasantri'");
        while ($obj = $result->fetch_object()) {
            $baris[] = $obj;
        foreach($baris as $user_data) {   
            echo "<tr>";
            echo "<td><p class='nomor'>".$user_data->no."</p></td>";
            echo "<td><p>".$user_data->namasantri."</p></td>";
            $tgl_lhr = new DateTime($user_data->tgl_lahir);
            $sekarang = new DateTime();
            $umr = $sekarang->diff($tgl_lhr);
            echo "<td><p>".$umr->y." Tahun</p></td>";
            echo "<td><p>".$user_data->kelamin."</p></td>";
            echo "<td><p>".$user_data->tlpn."</p></td>";
            echo "<td><p>".$user_data->alamat."</p></td>";
            echo "<td><p>".date('d M Y',strtotime($user_data->tgl_masuk))."</p></td>";
            echo "<td><p>".$user_data->status."</p></td>";
            echo "<td><p><a href='edit_datasantri.php?no=$user_data->no'>edit</a>";
            echo "<a href='delete_datasantri.php?no=$user_data->no'> || Hapus</a></p></td></tr>";
        }
    }}else{      
            $result = mysqli_query($mysqli,"SELECT * FROM datasantri");
            while ($obj = $result->fetch_object()) {
                $baris[] = $obj;    
            }
            foreach($baris as $user_data) {   
                echo "<tr>";
                echo "<td><p class='nomor'>".$user_data->no."</p></td>";
                echo "<td><p>".$user_data->namasantri."</p></td>";
                $tgl_lhr = new DateTime($user_data->tgl_lahir);
                $sekarang = new DateTime();
                $umr = $sekarang->diff($tgl_lhr);
                echo "<td><p>".$umr->y." Tahun</p></td>";
                echo "<td><p>".$user_data->kelamin."</p></td>";
                echo "<td><p>".$user_data->tlpn."</p></td>";
                echo "<td><p>".$user_data->alamat."</p></td>";
                echo "<td><p>".date('d M Y',strtotime($user_data->tgl_masuk))."</p></td>";
                echo "<td><p>".$user_data->status."</p></td>";
                echo "<td><p><a href='edit_datasantri.php?no=$user_data->no'>edit</a>";
                echo "<a href='delete_datasantri.php?no=$user_data->no'> || Hapus</a></p></td></tr>";
            }
}
        ?>
        </table>
    </form>
    </div>
    </div>
</body>
</html>

