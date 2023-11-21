<?php
    session_start();

    if(isset($_SESSION['userid_admin']) && $_SESSION['login_type'] == 'admin'){

    }
    else {
        echo '<script>alert("Accès refusé");window.location.assign("index.php")</script>';
        exit();
    }
?>