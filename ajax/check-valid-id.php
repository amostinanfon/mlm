<?php
    require('../php-includes/connect.php');

    if(isset($_POST['valid_id'])){
        /** @var TYPE_NAME $con */
        $valid_id = mysqli_real_escape_string($con,$_POST['valid_id']);

        $query = mysqli_query($con,"select * from epin_list where epin='$valid_id' and status='Unused'");

        if(mysqli_num_rows($query) == 1){
            echo 1;
        } else {
            echo 0;
        }

    }
?>