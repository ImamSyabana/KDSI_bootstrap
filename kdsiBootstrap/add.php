<html>
<head>
    <title>Menambahkan data santri</title>
</head>
<body>
    <a href="main.php">Go To Home</a>
    <br/><br/>
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Nama Santri</td>
                <td><input type="text" name="name"</td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"</td>
            </tr>
            <tr>
                <td>telpon</td>
                <td><input type="text" name="mobile"</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type = "date" name = "tgl_lahir"</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type = "text" name = "kelamin"</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Daftar"</td>
            </tr>
            
        </table>
    </form>
    <?php
    if(isset($_POST['Submit'])) {
        $namasantri /*ini variabel yang di database*/ = $_POST['name']; /*ini variabel yang di phpnya*/
        $email = $_POST['email'];
        $tlpn = $_POST['mobile'];
        $kelamin = $_POST['kelamin'];
        $tgl_lahir = $_POST['tgl_lahir'];
        include_once("connect.php");
        $result = mysqli_query($mysqli, "INSERT INTO datasantri(namasantri,email,tlpn,kelamin, tgl_lahir) VALUES('$namasantri','$email','$tlpn','$tgl_lahir','$kelamin')");
        echo "User added succesfully. <a href='main.php'>View Users</a>";
    }
    ?>
</body>
</html>