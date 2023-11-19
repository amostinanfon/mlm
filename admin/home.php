<?php

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
                <?php
                    require('php-includes/card.php');
                ?>
                <?php
                    require('php-includes/chart.php');
                ?>
                <?php
                    require('php-includes/table-content.php');
                ?>

            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <?php
                require('php-includes/copyright-content.php');
            ?>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>
</html>

