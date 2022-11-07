<html>
<div class="atas">
    <top><img src="image/logo pp dream.png" width="110px" height="100px">
     <img class="logo" src="image/logo2.png" width="200px" height="70px"></top>
     <div class="kotak"></div>
</div>       
<head>
<link rel="stylesheet" href="bg.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="logout.css?v=<?php echo time(); ?>">
    <title>LOGOUT</title>       

</head>
<body>
<div class = "header">
<div class="logo_bg"></div>
<div class="tulis">
<p><b>Apakah anda benar-benar ingin logout dari aplikasi?</b></p>
<form name="delete" method="post" action="logout.php">
<input type="hidden" name="page" value=<?php echo $_GET['page'];?>>
<div class="yes"><input type="submit" name="yes" value="YES"></div><div class="no"><input type="submit" name="tidak" value="NO"></div>
</div></div>
<?php
  
  if(isset($_POST['yes'])){
    header("Location:index.php");
  }elseif(isset($_POST['tidak'])){
    $page = $_POST['page'];
    header("Location:$page");
  }
?>
</form>
</body>
</html>