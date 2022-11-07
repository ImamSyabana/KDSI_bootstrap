<?php
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        //$username = stripcslashes($username);
        //$password = stripcslashes($password);

/*
        $result "SELECT * FROM administrator WHERE username = '$username' and password = '$password'" 
                or die("failed to query database: " . mysqli_error());
*/

        $sql = "SELECT * FROM administrator WHERE username = '".$username."' and password = '".$password."'
        limit 1";

        $result = mysqli_query($mysqli, $sql);

        if(mysqli_num_rows($result) == 1) {
            echo "You have successfully logged in.";
            exit();

        }
        else{
            echo "You have entered an invalid username or password";
            exit();
        }
}
    ?>