<?php
    require('php-includes/check-login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      require('php-includes/header-content.php');
    ?>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <?php
        require('php-includes/header-header.php');
    ?>
</nav>
<div id="layoutSidenav">
    <?php
        require('php-includes/sidebar.php');
    ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <?php
                    require('php-includes/title.php');
                ?>
<!--                --><?php
//                    require('php-includes/card.php');
//                ?>
<!--                --><?php
//                    require('php-includes/chart.php');
//                ?>
<!--                --><?php
//                    require('php-includes/table-content.php');
//                ?>

            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <?php
                require('php-includes/copyright-content.php');
            ?>
        </footer>
    </div>
</div>
            <?php
                require('php-includes/main-script.php');
            ?>
</body>
</html>

