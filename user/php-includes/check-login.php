<?php
    session_start();
    if(isset($_SESSION['id']) && $_SESSION['login_type'] == 'user'){
//        echo $_SESSION['login_type'];
    }
    else {
        echo '<script>alert("Accès refusé"); window.location.assign("../login.php");</script>';
    }
?>