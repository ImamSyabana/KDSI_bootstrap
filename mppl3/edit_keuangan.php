<?php
include_once("connect.php");
if(isset($_POST['update']))
{
    $no = $_POST['no'];
    $keterangan = $_POST['keterangan'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $besarmutasi = $_POST['besarmutasi'];
    $jenismutasi = $_POST['jenismutasi'];
    if($jenismutasi == 'pengeluaran'){
        $totalkas = $totalkas = $_POST['totalkas']-$besarmutasi;
    }else{
        $totalkas = $totalkas = $_POST['totalkas']+$besarmutasi;
    }
 $hasil = mysqli_query($mysqli, "UPDATE keuangan SET keterangan = '$keterangan', bulan= '$bulan', tahun='$tahun', besarmutasi='$besarmutasi', jenismutasi='$jenismutasi', totalkas='$totalkas' WHERE no=$no");
 header("Location: keuangan.php");
}
$no = $_GET["no"];
$result = mysqli_query($mysqli, "SELECT * FROM keuangan WHERE no = $no");
while($user_data = mysqli_fetch_array($result))
{
    $keterangan = $user_data['keterangan'];
    $bulan = $user_data['bulan'];
    $tahun = $user_data['tahun'];
    $besarmutasi = $user_data['besarmutasi'];
    $jenismutasi = $user_data['jenismutasi'];
    $totalkas = $user_data['totalkas'];
}
?>

<html>
<div class="atas">
    <top><img src="image/logo pp dream.png" width="110px" height="100px">
     <img class="logo" src="image/logo2.png" width="200px" height="70px"></top>
     <div class="kotak"></div>
     <div class="icon">
     <p class="pencet">LOG OUT
		<a href="logout.php?page=edit_keuangan.php" class="logout"><img src="image/box-arrow-in-right.svg"></a>
     </p>
     </div>
</div>       
<head>
<link rel="stylesheet" href="bg.css?v=<?php echo time(); ?>">
    <title>Edit Data Keuangan Pesantren</title>       

</head>
<body>
<div class = "header">
<div class="logo_bg"></div>
<a href="keuangan.php">Kembali</a>
<br/><br/>
<form name="update_user" method="post" action="edit_keuangan.php">
<table width="30%" border="0">
<tr>
            <td>Keterangan</td>
            <td><input type="text" name="keterangan" value=<?php echo $keterangan;?>></td>
        </tr>
        <tr>
            <td>Bulan</td>
            <td><input type="text" name="bulan" value=<?php echo $bulan;?>></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td><input type="text" name="tahun" value=<?php echo $tahun;?>></td>
        </tr>
        <tr>
            <td>Besar Mutasi</td>
            <td><input type="text" name="besarmutasi" value=<?php echo $besarmutasi;?>></td>
        </tr>
        <tr>
            <td>Jenis Mutasi</td>
            <?php
            $mutasi = ['pengeluaran','pemasukan']
        ?>
            <td><select name="jenismutasi">
            <option value=""><?php echo $jenismutasi?></option>
            <?php 
                for($i=0;$i<2;$i++){
                    echo "<option value= '".$mutasi[$i]."'>".$mutasi[$i]."</option>";
                }
            ?>
        </select></td>
        </tr>
        <tr>
            <td>Total Kas Sebelumnya</td>
            <td><input type="text" name="totalkas" value=<?php echo $totalkas;?>></td>
        </tr>
        
        <tr>
            <td><input type="hidden" name="no" value=<?php echo $_GET['no'];?>>
            <input type="submit" name="update" value="Update"></td>
        </tr>
</table>
</form>
</body>
</html>

