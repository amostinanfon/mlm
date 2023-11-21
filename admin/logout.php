<?php
    session_start();
    session_destroy();

    echo '<script>alert("Déconnexion réussie"); window.location.assign("../admin/index.php");</script>';
?>