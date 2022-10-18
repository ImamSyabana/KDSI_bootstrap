<?php
include_once("connect.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM datasantri WHERE id=$id");

header("Location:main.php");
?>