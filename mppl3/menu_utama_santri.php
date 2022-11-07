<?php
    include("connect.php");
    $username=$_GET['username'];
?>

<!DOCTYPE html>
<html lang="en">
    
<div class="atas">
    <top><img src="image/logo pp dream.png" width="110px" height="100px">
     <img class="logo" src="image/logo2.png" width="200px" height="70px"></top>
     <div class="kotak"></div>
     <div class="icon">
     <p class="pencet">LOG OUT
			<?php echo "<a href='logout.php?page=menu_utama_santri.php?username=$username' class='logout'>";?><img src="image/box-arrow-in-right.svg"></a>
     </p>
     </div>
</div>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="bg.css?v=<?php echo time(); ?>">
    <title>menu utama aplikasi</title>
</head>
</head>
<body>
    <div class = "header">
    <div class="logo_bg"></div>
        <div class="samping">
            <ul class="links">
            <li><?php echo "<a href='info_pembayaran_santri.php?username=$username'>Info Pembayaran </a></li>"?>
            <div class="active"></div>
        </ul>
        </div>
        <div class="tubuh">
        <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch($page){
                case 'infopembayaran':
                    include "info_pembayaran_santri.php";
                    break;
                default:
                    echo "<div class='judul'>
                    <p><b>Hi santri pesantren Jabal Thoriq</b></p><br></br>
                    <p><b>Selamat Datang di Sistem Informasi Pesantren Jabal Thoriq</b></p>
                    </div>";
                    break;
            }
        }else{
            ?>
            <div class="judul">
        <p><b>Hi santri pesantren Jabal Thoriq</b></p><br></br>
        <p><b>Selamat Datang di Sistem Informasi Pesantren Jabal Thoriq</b></p>
        </div>
            <?php
            
        }
        ?>
        
        
      
        
        </div>
    </form>
    
</body>
</html>

