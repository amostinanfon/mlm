<?php
    require('../php-includes/connect.php');

    /** @var TYPE_NAME $con */
    if(isset($_POST['username'])){
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
        $referral_username = mysqli_real_escape_string($con,$_POST['referral_username']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $password_confirm = mysqli_real_escape_string($con,$_POST['password_confirm']);
        $address = mysqli_real_escape_string($con,$_POST['address']);

        $query_check = mysqli_query($con,"SELECT `id` from users_mlm_table where username='$referral_username' and status='Activated' limit 1");

        if(mysqli_num_rows($query_check) == 1){

            $result_check = mysqli_fetch_array($query_check);
            $referral_user = $result_check['id'];

            $query_insert = mysqli_query($con,"INSERT into users_mlm_table (`name`,`username`,`email`,`mobile`,`referral_user`,`address`,`join_date`) values 
                                                                            ('$name','$username','$email','$mobile','$referral_user','$address',now())");

            if($query_insert){
                echo 1;
            }
            else {
                echo 0;
            }
        }
        else {
            echo 0;
        }
    }
    else {
        echo 0;
    }
?>
