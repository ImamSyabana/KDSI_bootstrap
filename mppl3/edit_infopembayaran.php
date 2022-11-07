<?php
include_once("connect.php");
if(isset($_POST['update']))
{
        $no = $_POST['no'];
        $namasantri = $_POST['namasantri'];
        $email = $_POST['email'];
        $tarif = $_POST['tarif'];
        $status = $_POST['status'];
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        $lainnya = $_POST['lainnya'];
        $catatan = $_POST['catatan'];


$hasil = mysqli_query($mysqli, "UPDATE infopembayaran SET namasantri='$namasantri',email='$email',status='$status', bulan= '$bulan', tahun= '$tahun', lainnya= '$lainnya' WHERE no=$no");
header("Location: info_pembayaran.php");
}
$no = $_GET["no"];
$result = mysqli_query($mysqli, "SELECT * FROM infopembayaran WHERE no = $no");
while($user_data = mysqli_fetch_array($result))
{
        $namasantri = $user_data['namasantri'];
        $email = $user_data['email'];
        $tarif = $user_data['tarif'];
        $status = $user_data['status'];
        $bulan = $user_data['bulan'];
        $tahun = $user_data['tahun'];
        $lainnya = $user_data['lainnya'];
}
?>

<html>
<div class="atas">
    <top><img src="image/logo pp dream.png" width="110px" height="100px">
     <img class="logo" src="image/logo2.png" width="200px" height="70px"></top>
     <div class="kotak"></div>
     <div class="icon">
     <p class="pencet">LOG OUT
	<a href="logout.php?page=edit_infopembayaran.php" class="logout"><img src="image/box-arrow-in-right.svg"></a>
     </p>
     </div>
</div>       
<head>
<link rel="stylesheet" href="bg.css?v=<?php echo time(); ?>">
    <title>Edit Info Pembayaran Santri</title>       

</head>
<body>
<div class = "header">
<div class="logo_bg"></div>
<a href="info_pembayaran.php">Kembali</a>
<br/><br/>
<form name="update_user" method="post" action="edit_infopembayaran.php">
<table width="30%" border="0">
<tr>
<td>Nama Lengkap</td>
<td><input type="text" name="namasantri" value=<?php echo $namasantri;?>></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" value=<?php echo $email;?>></td>
</tr>
<tr>
<td>tarif</td>
<td><input type="text" name="tarif" value=<?php echo $tarif;?>></td>
</tr>

<tr>
<td>status</td>
<td><input type="text" name="status" value=<?php echo $status;?>></td>
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
<td>Biaya lainnya</td>
<td><input type="text" name="lainnya" value=<?php echo $lainnya;?>></td>
</tr>

<tr>
<td><input type="hidden" name="no" value=<?php echo $_GET['no'];?>>
<input type="submit" name="update" value="update"></td>
</tr>
</table>
</form>
</body>
</html>

