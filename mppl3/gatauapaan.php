
<?php
    include_once("connect.php:") ;
    $username = "";
    $email = "";
    $error = array();
    //$password1 = "";
    //$password2 = "";


    //jika pengguna menekan tombol register
    if(isset ($_POST['register'])){
        $username = $mysqli->real_escape_string($username);
        $email = $mysqli->real_escape_string($user);
        $password_1 = $mysqli->real_escape_string($password_1);
        $password_2 = $mysqli->real_escape_string($password_2);

        if(empty($username)) {
            array_push($error, "username dibutuhkan");
        }
        if(empty($email)) {
            array_push($error, "email dibutuhkan");
        }
        if(empty($password_1)) {
            array_push($error, "password dibutuhkan");
        }
        if(empty($password_1 != $password_2)) {
            array_push($error, "input konfirmasi password salah");
        }
        
        //kalo ga ada error data bisa di masukkan ke database
        if (count ($error) == 0) {
            $password = md5($password_1); //encrypt password before storing in database
            if($pihak == 'administrator' ){
                $sql = "INSERT INTO administrator (username, email, password)
                VALUES ('$username', '$email','$password')";
            }
            else if($pihak == 'santri'){
                $sql = "INSERT INTO santri (username, email, password)
                VALUES ('$username', '$email','$password')";
            }
            mysqli_query($mysqli, $sql);
        }
    
    
    }
?>