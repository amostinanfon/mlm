<?php
//require('../php-includes/connect.php');
//
//?>
<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!---->
<!--<head>-->
<!---->
<!--    <meta charset="utf-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
<!--    <meta name="description" content="">-->
<!--    <meta name="author" content="">-->
<!---->
<!--    <title>ASN MLM</title>-->
<!---->
<!--    Custom fonts for this template-->
<!--    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->
<!--    <link-->
<!--        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"-->
<!--        rel="stylesheet">-->
<!---->
<!--     Custom styles for this template-->
<!--    <link href="../css/sb-admin-2.min.css" rel="stylesheet">-->
<!---->
<!--</head>-->
<!---->
<!--<body class="bg-gradient-primary">-->
<!---->
<!--<div class="container">-->
<!---->
<!--    <div class="container-fluid px-4">-->
<!---->
<!--        <ol class="breadcrumb mb-4 mt-4">-->
<!--            <li class="breadcrumb-item active">GESTION DES ID ou CODES</li>-->
<!--        </ol>-->
<!---->
<!--        <div class="card mb-4">-->
<!--            <div class="card-header">-->
<!--                <i class="fas fa-table me-1"></i>-->
<!--                Voici la liste des codes encore valides ( non utilisés )-->
<!--            </div>-->
<!--            <div class="card-body">-->
<!---->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>id</th>-->
<!--                        <th>No Code</th>-->
<!--                        <th>Date</th>-->
<!--                        <th>Statut</th>-->
<!--                        <th>Action</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    $result = mysqli_query($con,"SELECT * FROM epin_list WHERE status='Unused'");
//                    if($result){
//                        while($row=mysqli_fetch_assoc($result)){
//
//                            $id=$row['id'];
//
//                            $epin=$row['epin'];
//                            $date=$row['date'];
//                            $status=$row['status'];
//
//                            echo '<tr>
//                                        <th scope="row">'.$id.'</th>
//                                        <td>'.$epin.'</td>
//                                        <td>'.$date.'</td>
//                                        <td>'.$status.'</td>
//
//                                        <td style="display: flex; gap: 10px">
//                                            <button class="btn btn-success" form="my_form">
//                                                <a
//                                                    href="accept.php?acceptid='.$id.'"
//                                                    // style="color: white"
//                                                >
//                                                    Accepter
//                                                </a>
//                                            </button>
//                                            <button class="btn btn-warning" form="my_form">
//                                                <a
//                                                    href="decline.php?declineid='.$id.'"
//                                                    // style="color: white"
//                                                >
//                                                    Refuser
//                                                </a>
//                                            </button>
//
//                                            <button class="btn btn-danger" form="my_form">
//                                                <a
//                                                    href="delete.php?deleteid='.$id.'"
//                                                    // style="color: white"
//                                                >
//                                                    Supprimer
//                                                </a>
//                                            </button>
//                                        </td>
//                                    </tr>';
//                        }
//                    }
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--</div>-->
<!--    Bootstrap core JavaScript-->
<!--    <script src="../vendor/jquery/jquery.min.js"></script>-->
<!--    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
<!---->
<!--    Core plugin JavaScript-->
<!--    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>-->
<!---->
<!--     Custom scripts for all pages-->
<!--    <script src="../js/sb-admin-2.min.js"></script>-->
<!---->
<!--</body>-->
<!---->
<!--</html>-->
<?php
require('php-includes/check-login.php');
include('../php-includes/connect.php');
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


    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
<!--                <h1 class="mt-4">DASHBOARD</h1>-->
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">INTERFACE DE GESTION DES REQUETES</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Base de données
                    </div>
                    <div class="card-header">
                        <div class="abc" style="display: flex; flex-direction: row; gap: 20px;">
                            <div >
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                <a href="home.php" style="text-decoration: none">
                                    Unused
                                </a>
                            </div>
                            <div>
                                <a href="linkused.php" style="text-decoration: none; ">
                                    Used
                                </a>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                            <div>
                                <a href="home.php" style="text-decoration: none; ">
                                    Accueil
                                </a>
                                <i class="fas fa-coffee" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="my_form"  onsubmit='return confirm("Etes-vous sur ?")'></form>
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>CODE</th>
                                <th>Date</th>
                                <th>STATUT</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $query = mysqli_query($con,"SELECT * FROM epin_list WHERE status='Unused'");
                            $i = 1;
                            while($row=mysqli_fetch_array($query)){

                                $id = $row['id'];
                                $img_address = "../user/receipt/".$id.".png";
                                ?>
                                <tr>
                                    <td><?php echo $id;?></td>
                                    <td><?php echo $row['epin'];?></td>
                                    <td><?php echo $row['date'];?></td>
                                    <td><?php echo $row['status'];?></td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <?php
            require('php-includes/copyright-content.php');
            ?>
        </footer>
</div>
<?php
require('php-includes/main-script.php');
?>
</body>
</html>