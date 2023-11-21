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
<div id="layoutSidenav">
    <?php
    require('php-includes/sidebar.php');
    ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">DASHBOARD</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">INTERFACE DE GESTION DES REQUETES</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Base de données
                    </div>
                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S.n</th>
                                    <th>Nom d'utilisateur</th>
                                    <th>No of Epin</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                    <th>Action</th>
                                    <!--                                    <th></th>-->
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = mysqli_query($con,"SELECT * FROM epin_request WHERE status='Ouvert'");
                            if($result){
                                while($row=mysqli_fetch_assoc($result)){

                                    $userid = $row['userid'];
                                    $query_user = mysqli_query($con, "SELECT name FROM users_mlm_table WHERE id='$userid' limit 1");
                                    $result_user = mysqli_fetch_array($query_user);

                                    $id=$row['id'];
                                    $name=$result_user['name'];
                                    $no_of_epin=$row['no_of_epin'];
                                    $date=$row['date'];
                                    $status=$row['status'];

                                    echo '<tr>
                                        <th scope="row">'.$id.'</th>
                                        <td>'.$name.'</td>
                                        <td>'.$no_of_epin.'</td>
                                        <td>'.$date.'</td>
                                        <td>'.$status.'</td>
                                        
                                        <td style="display: flex; gap: 10px">
                                            <button class="btn btn-success" form="my_form">
                                                <a 
                                                    href="accept.php?acceptid='.$id.'" 
                                                    // style="color: white"                 
                                                >
                                                    Accepter
                                                </a>
                                            </button>
                                            <button class="btn btn-warning" form="my_form">
                                                <a 
                                                    href="decline.php?declineid='.$id.'" 
                                                    // style="color: white"                 
                                                >
                                                    Refuser
                                                </a>
                                            </button>
                                            
                                            <button class="btn btn-danger" form="my_form">
                                                <a 
                                                    href="delete.php?deleteid='.$id.'" 
                                                    // style="color: white"                 
                                                >
                                                    Supprimer
                                                </a>
                                            </button>
                                        </td>
                                    </tr>';
                                }
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
</div>
<?php
require('php-includes/main-script.php');
?>
</body>
</html>