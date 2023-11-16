<?php
    require('../php-includes/connect.php');

    if(isset($_POST['username'])){
        $username = mysqli_real_escape_string($con,$_POST['username']);

        $query = mysqli_query($con,"select * from users_mlm_table where username='username'");
        if(mysqli_num_rows($query) ==0 ){
            echo 1;
        } else {
            echo 0;
        }
    }
?>