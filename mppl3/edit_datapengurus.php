<?php
include_once("connect.php");
if(isset($_POST['update']))
{
    $no = $_POST['no'];
    $namasantri = $_POST['namasantri'];
    $periode = $_POST['periode'];
    $bidang = $_POST['bidang'];
    $hasil = mysqli_query($mysqli, "UPDATE pengurus SET namasantri='$namasantri', 
    periode='$periode', bidang='$bidang' WHERE no=$no");
    header("Location: pengurus_pondok.php");
}
$no = $_GET["no"];
$result = mysqli_query($mysqli, "SELECT * FROM pengurus WHERE no=$no");
while($user_data = mysqli_fetch_array($result))
{
 $namasantri= $user_data['namasantri'];
 $periode= $user_data['periode'];
 $bidang= $user_data['bidang'];
 
}
?>
<html>
<div class="atas">
    <top><img src="image/logo pp dream.png" width="110px" height="100px">
     <img class="logo" src="image/logo2.png" width="200px" height="70px"></top>
     <div class="kotak"></div>
     <div class="icon">
     <p class="pencet">LOG OUT
			<a href="logout.php?page=edit_datapengurus.php" class="logout"><img src="image/box-arrow-in-right.svg"></a>
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
<a href="pengurus_pondok.php">Kembali</a>
<br/><br/>
<form name="update_user" method="post" action="edit_datapengurus.php">
<table width="30%" border="0">
<tr>
<tr>
<td>Nama Pengurus</td>
<td><input type="text" name="namasantri" value=<?php echo $namasantri;?>></td>
</tr>
<tr>
<td>Periode</td>
<td><input type="text" name="periode" value=<?php echo $periode;?>></td>
</tr>     
<td>Bidang Kepengurusan</td>
<td><input type="text" name="bidang" value=<?php echo $bidang;?>></td>
</tr>
<tr>
<td><input type="hidden" name="no" value=<?php echo $_GET['no'];?>>
<input type="submit" name="update" value="update"></td>
</tr>
</table>
</form>
</body>
</html>

