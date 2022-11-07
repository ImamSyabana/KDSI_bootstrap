<?php
include_once("connect.php");
if(isset($_POST['update']))
{
    $no = $_POST['no'];
    $namasantri = $_POST['namasantri'];
    $email = $_POST['email'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $kelamin = $_POST['kelamin'];
    $status = $_POST['status'];
    $tlpn = $_POST['tlpn'];
    $alamat = $_POST['alamat'];
    $tgl_masuk = $_POST['tgl_masuk'];
 $hasil = mysqli_query($mysqli, "UPDATE datasantri SET namasantri = '$namasantri', email= '$email', tgl_lahir='$tgl_lahir', kelamin='$kelamin', status='$status', alamat='$alamat', tlpn='$tlpn',tgl_masuk='$tgl_masuk' WHERE no=$no");
 header("Location: data_santri.php");
}
$no = $_GET["no"];
$result = mysqli_query($mysqli, "SELECT * FROM datasantri WHERE no=$no");
while($user_data = mysqli_fetch_array($result))
{
 $namasantri = $user_data['namasantri'];
 $email = $user_data['email'];
 $tgl_lahir = $user_data['tgl_lahir'];
 $kelamin = $user_data['kelamin'];
 $status = $user_data['status'];
 $tlpn = $user_data['tlpn'];
 $alamat = $user_data['alamat'];
 $tgl_masuk = $user_data['tgl_masuk'];
}
?>
<html>
<div class="atas">
    <top><img src="image/logo pp dream.png" width="110px" height="100px">
     <img class="logo" src="image/logo2.png" width="200px" height="70px"></top>
     <div class="kotak"></div>
     <div class="icon">
     <p class="pencet">LOG OUT
			<a href="logout.php?page=edit_datasantri.php" class="logout"><img src="image/box-arrow-in-right.svg"></a>
     </p>
     </div>
</div>       
<head>
<link rel="stylesheet" href="bg.css?v=<?php echo time(); ?>">
    <title>Edit Data Santri</title>       

</head>
<body>
<div class = "header">
<div class="logo_bg"></div>
<a href="data_santri.php">Kembali</a>
<br/><br/>
<form name="update_user" method="post" action="edit_datasantri.php">
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
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tgl_lahir" value=<?php echo $tgl_lahir;?>></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="kelamin" value=<?php echo $kelamin;?>></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td><input type="text" name="tlpn" value=<?php echo $tlpn;?>></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
        </tr>
        <tr>
            <td>Tanggal Masuk</td>
            <td><input type="date" name="tgl_masuk" value=<?php echo $tgl_masuk;?>></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><input type="text" name="status" value=<?php echo $status;?>></td>
        </tr>
<tr>
<td><input type="hidden" name="no" value=<?php echo $_GET['no'];?>>
<input type="submit" name="update" value="update"></td>
</tr>
</table>
</form>
</body>
</html>

