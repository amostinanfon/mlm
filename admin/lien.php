
<?php
    require('../php-includes/connect.php');
    include('php-includes/check-login.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ASN MLM</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    PAGE DE GESTION DES ID ( LES CODES SONT GENERES PAR LE SYSTEME )
                                </div>
                                    <div class="card-body">
                                        <button type="submit" id="linkgenerate" class="btn btn-light btn-icon-split m-3"  >
                                                    <span class="icon text-gray-600">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </span>
                                            <span class="text" >CLIQUER POUR GENERER UN ID</span>
                                        </button>
                                        <button type="submit" id="linkgenerate" class="btn btn-light btn-icon-split m-3" >
                                                    <span class="icon text-gray-600">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </span>
                                            <span class="text" >
                                                <a href="linkunused.php" style="text-decoration: none">VOIR LA LISTE DES ID DISPONIBLES</a>
                                            </span>
                                        </button>
                                        <button type="submit" id="linkgenerate" class="btn btn-light btn-icon-split m-3" >
                                                    <span class="icon text-gray-600">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </span>
                                            <span class="text" >
                                                <a href="linkused.php" style="text-decoration: none">VOIR LA LISTE DES ID NON DISPONIBLES</a>
                                            </span>
                                        </button>
                                    </div>

        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>

<script type="text/javascript">

    // form submitted
    $('#linkgenerate').click(function (){
                $.ajax({
                    type: "POST",
                    url: "linkajax.php",
                    data: { name: "John" }
                    }).done(function( msg ) {
                   alert(msg );
                });
    });

</script>

</body>

</html>
