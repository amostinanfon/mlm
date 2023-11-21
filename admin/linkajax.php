<?php

    require("../php-includes/connect.php");
    include('php-includes/check-login.php');

        $random_number = rand(1000000,9999999);
        $new_epin = sha1($random_number);

        $result = mysqli_query($con,"insert into epin_list(`epin`,`date`) values ('$new_epin',now())");

        if($result){
            echo "Code généré avec succès !!!";
        }
        else {
            echo "Impossible de générer le Code";
        }

?>