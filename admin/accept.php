<?php

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

//require './PHPMailer/src/Exception.php';
//require './PHPMailer/src/PHPMailer.php';
//require './PHPMailer/src/SMTP.php';

require('php-includes/check-login.php');
include('../php-includes/connect.php');


if (!$con) {
    echo "Connection failed";
}  else {

    if(isset($_GET['acceptid'])){
        $id=$_GET['acceptid'];

        $sql = "select * from epin_request where id='$id'";
        $result = mysqli_query($con,$sql);

        $row = mysqli_fetch_array($result);

        if($result){
            $status = $row['status'];
//            $email = $row['email'];
//            $name = $row['name'];
//            $subject = 'Confirmation de votre demande de souscription au projet SN';

            if($status == 'Ouvert'){

                $sql = "update epin_request set status='Fermé' where id='$id'";
                $query = mysqli_query($con, $sql);

//                $body = "";
//
//                $body .= " De :".$name."\n\n";
//                $body .= " Email :" .$email."\n\n";
//                $body .= " Sujet : <b>" .$subject."</b>\n\n";
//                $body .= " *** La SN association vous remercie de nous avoir fait
//                confiance pour cette aventure. Veuillez compléter votre inscription en nous envoyant vos différents documents dans les 72h maximum.
//                .";
//                $body .= " VOTRE ID :  " .$id."\n\n";
//
//                $mail = new PHPMailer(true);
//                $mail->isSMTP();
//                $mail->Host = 'smtp.gmail.com';
//                $mail->SMTPAuth = true;
//                $mail->Username = 'amostinanfon17@gmail.com';
//                $mail->Password = "qfarqpkoafkfnlqp";
//                $mail->Port =  465;
//                $mail->SMTPSecure = 'ssl';
//                $mail->isHTML(true);
//                $mail->setFrom($email, $name);
//                $mail->addAddress('amostinanfon17@gmail.com');
//                $mail->addAddress('contact@associationsurvivors.org');
//                $mail->addAddress($email);
//                $mail->Subject = ("$email($subject)");
//                $mail->Body = $body;
//                $mail->send();


                echo '<script>alert("Demande acceptée !!!");window.location.assign("epin-request.php")</script>';

            } else {
                echo '<script>alert("Demande déjà approuvée ou Supprimé!!!");window.location.assign("epin-request.php")</script>';
            }

        }


    }
}


?>
