<?php
    include('php-includes/check-login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require('php-includes/header-content.php');
    ?>
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
        <?php
            require('php-includes/sidebar.php');
        ?>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
                <?php
                    require('php-includes/header.php');
                ?>
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
            <?php
                require('php-includes/footer-copyright.php');
            ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
            <?php
                require('php-includes/footer.php');
            ?>
</body>

</html>
