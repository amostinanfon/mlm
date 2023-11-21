<?php
    require('php-includes/check-login.php');
    include('../php-includes/connect.php');
?>

<?php
//    if(isset($_POST['btn_approve'])){
//
//
//
//        $id = mysqli_real_escape_string($con,$_POST['id']);
//
//        $query = mysqli_query($con,"SELECT * FROM epin_request WHERE id='$id'");
//        $result = mysqli_fetch_array($query);
//
//        $userid = $result['userid'];
//        $no_of_query = $result['no_of_epin'];
//
//        for($i=0; $i++; $i<$no_of_query){
//          $query = mysqli_query($con, "INSERT into epin_list(`userid`,`epin`) values ('$userid', 'epin')");
//        }
//
//        $query_update = mysqli_query($con,"UPDATE epin_request SET status='Fermé' WHERE id='$id' limit 1");
//    }
//
//    function create_epin(){
//        $random_number = rand(100000,9999999);
//        $new_epin = sha1($random_number);
//        return $new_epin;
//    }
//
//   if(isset($_POST['btn_cancel'])){
//       $id = mysqli_real_escape_string($con,$_POST['id']);
//   }
//?>

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
                        <form method="POST" id="my_form"  onsubmit='return confirm("Etes-vous sur ?")'></form>
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>S.n</th>
                                    <th>Nom d'utilisateur</th>
                                    <th>No of Epin</th>
                                    <th>Date</th>
                                    <th>Image</th>
                                    <th>Action</th>
<!--                                    <th></th>-->
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $query = mysqli_query($con,"SELECT * FROM epin_request WHERE status='Ouvert'");
                                $i = 1;
                                while($row=mysqli_fetch_array($query)){
                                    $userid = $row['userid'];
                                    $query_user = mysqli_query($con, "SELECT name FROM users_mlm_table WHERE id='$userid' limit 1");
                                    $result_user = mysqli_fetch_array($query_user);

                                    $id = $row['id'];
                                    $img_address = "../user/receipt/".$id.".png";
                            ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $result_user['name'];?></td>
                                    <td><?php echo $row['no_of_epin'];?></td>
                                    <td><?php echo $row['date'];?></td>
                                    <td>
                                        <?php
                                        if(file_exists($img_address)){
                                        ?>
                                        <a href="<?php echo $img_address ?>" target="_blank">
                                        <img src="<?php echo $img_address ?>" height="50" width="75">
                                        </a>
                                        <?php
                                        }
                                        else{
                                            echo 'No Receipt';
                                        }
                                        ?>
                                    </td>
                                        <td>
                                            <button
                                                    type="submit"
                                                    name="btn_approve"
                                                    form="my_form"
                                                    class="btn btn-success">
                                                <a href="accept.php?acceptid='.$id.'">
                                                    Accepter
                                                </a>
                                            </button>
                                            <button type="submit" name="btn_cancel" form="my_form" class="btn btn-danger">Supprimer</button>
                                        </td>
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
</div>
<?php
    require('php-includes/main-script.php');
?>
</body>
</html>

