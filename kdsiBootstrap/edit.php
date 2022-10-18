<?php
include_once("connect.php"); // include database connection file
if(isset($_POST['update'])) // Check if form is submitted for user update, then redirect to homepage after update
{
$id = $_POST['id'];
$namasantri=$_POST['namasantri'];
$tlpn=$_POST['tlpn'];
$email=$_POST['email'];
$kelamin = $_POST['kelamin'];
$tgl_lahir= $_POST['tgl_lahir'];

// update user data
$result = mysqli_query($mysqli, "UPDATE datasantri SET namasantri='$namasantri',email='$email',tlpn='$tlpn',kelamin = '$kelamin', tgl_lahir = '$tgl_lahir'  WHERE id=$id");
// Redirect to homepage to display updated user in list
header("Location: main.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM datasantri WHERE id=$id");
while($user_data = mysqli_fetch_array($result))
{
$namasantri = $user_data['namasantri'];
$email = $user_data['email'];
$tlpn = $user_data['tlpn'];
$kelamin = $user_data['kelamin'];
$tgl_lahir= $user_data['tgl_lahir'];
}
?>
<html>
<head>
<title>Edit User Data</title>
</head>
<body>
<a href="main.php">Home</a>
<br/><br/>
<form name="update_user" method="post" >
<table border="0">
<tr>
<td>Name</td>
<td><input type="text" name="namasantri" value=<?php echo $namasantri;?>></td>
</tr>
<tr>
<td>Email</td> 
<td><input type="text" name="email" value=<?php echo $email;?>></td>
</tr>
<tr>
<td>Mobile</td>
<td><input type="text" name="tlpn" value=<?php echo $tlpn;?>></td>
</tr>
<tr>
<td>kelamin</td>
<td><input type="text" name="kelamin" value=<?php echo $kelamin;?>></td>
</tr>
<tr>
<td>tgl_lahir</td>
<td><input type="date" name="tgl_lahir" value=<?php echo $tgl_lahir;?>></td>
</tr>

<tr>
<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>