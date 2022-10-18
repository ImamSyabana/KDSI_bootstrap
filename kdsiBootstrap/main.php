<?php
include_once("connect.php");

$result = mysqli_query($mysqli, "SELECT * FROM datasantri ORDER BY id DESC");
?>

<html>
    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
code {
  font-family: Consolas,"courier new";
  color: crimson;
  background-color: #f1f1f1;
  padding: 2px;
  font-size: 105%;
}

    h1{
        color:black
        
    }
</style>
</head>

    <head>
        <title>tambah data santri</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    
    <h1 style = "color : green; margin-top : 2px"><a href="add.php">TAMBAHKAN DATA SANTRI</a><br/><br/></h1>
        
        <table width='80%' border=1>
        <tr>
            <th>Nama Santri</th> <th>No Telpon</th> <th>Email</th> <th>Tgl_lahir</th> <th>Kelamin</th>
        </tr>
        <?php
        While($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$user_data['namasantri']."</td>";
            echo "<td>".$user_data['tlpn']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td>".$user_data['tgl_lahir']."</td>";
            echo "<td>".$user_data['kelamin']."</td>";
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
        
        }
        ?>
        </table>
    </body>
</html>