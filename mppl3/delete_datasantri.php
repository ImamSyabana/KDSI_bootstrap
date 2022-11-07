<html>
<div class="atas">
    <top><img src="image/logo pp dream.png" width="110px" height="100px">
     <img class="logo" src="image/logo2.png" width="200px" height="70px"></top>
     <div class="kotak"></div>
</div>       
<head>
<link rel="stylesheet" href="bg.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="delete.css?v=<?php echo time(); ?>">
    <title>Delete Data Santri</title>       

</head>
<body>
<div class = "header">
<div class="logo_bg"></div>
<div class="tulis">
<p><b>Apakah anda benar-benar ingin menghapus data tersebut?</b></p>
<form name="delete" method="post" action="delete_datasantri.php">
<input type="hidden" name="no" value=<?php echo $_GET['no'];?>>
<div class="yes"><input type="submit" name="yes" value="YES"></div><div class="no"><input type="submit" name="tidak" value="NO"></div>
</div></div>
<?php
  include_once("connect.php");
  if(isset($_POST['yes'])){
    $no = $_POST['no'];
    $result = mysqli_query($mysqli, "DELETE FROM datasantri WHERE no = $no");
    header("Location:data_santri.php");
  }elseif(isset($_POST['tidak'])){
    header("Location:data_santri.php");
  }
?>
</form>
</body>
</html>