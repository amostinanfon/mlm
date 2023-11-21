<?php

    session_start();
    require('../php-includes/connect.php');

    if(isset($_POST['submit-login'])){

        /** @var TYPE_NAME $con */
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['password']);

        if($email != '' && $password != ''){
            $query_check = mysqli_query($con, "SELECT * FROM admin WHERE email='$email' && password='$password'");

            if(mysqli_num_rows($query_check) == 1){
//                echo 'everything is Ok';
                $_SESSION['userid_admin'] = $email;
                $_SESSION['id'] = session_id();
                $_SESSION['login_type'] = 'admin';

                echo '<script> alert("Connexion réussie");window.location.assign("home.php")</script>';
            }
            else {
                echo '<script>alert("Email ou mot de passe incorrect")</script>';
            }
        }

        else {
            echo 'out';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require('php-includes/header-content.php');
    ?>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Bienvenue Admin</h3></div>
                            <div class="card-body">
                                <form method="POST">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" name="email" type="email" placeholder="admin@mlm.com" required />
                                        <label for="inputEmail">Adresse Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Mot de passe" required/>
                                        <label for="inputPassword">Mot de passe</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                        <label class="form-check-label" for="inputRememberPassword">Se souvenir du Mot de passe</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="password.html">Mot de passe oublié ?</a>
                                        <button type="submit" name="submit-login" class="btn btn-primary">Se connecter</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="register.html">Besoin d'un compte ? Créer un compte!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <?php
            require('php-includes/copyright-content.php');
            ?>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
</html>

