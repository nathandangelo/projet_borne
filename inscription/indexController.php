<?php
use classes\Domain\Subscriber;
use classes\Dao\SubscriberDao;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception ;
use PHPMailer\PHPMailer\SMTP;

include "../src/classes/Domain/Subscriber.php";
include "../src/classes/Dao/SubscriberDao.php";

include '../vendor/autoload.php';

$receveur = $_POST["mail"];
$nom = $_POST["nom"];
$mail = $_POST["mail"];

$subscriber = new Subscriber(null, $nom, $mail);

$subscriberDao = new SubscriberDao();

$subscriberDao->addSubscriber($subscriber);

$message = "";


$mail = new PHPMailer(true); // instancie un new objet phpmailer

try {

    //$mail->SMTPDebug = 2 ;
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth  =  true ;
    $mail->Username = 'zegick.laforme@gmail.com';
    $mail->Password = 'pingoleon42400';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom($receveur);
    $mail->addAddress($receveur);     // Add a recipient

      // Add attachments


    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Planning de la Semaine';
    $mail->msgHTML (file_get_contents('contents.html'), __DIR__);
    $mail->AltBody = 'Bienvenue a tous';
    $mail->send();
    header("location:http://localhost/borne/projet_borne/#t3");

}
catch (Exception $e) {
    echo 'error' , $mail->ErrorInfo;
}
require 'indexView.php';

?>
