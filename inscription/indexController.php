<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception ;
use PHPMailer\PHPMailer\SMTP;
include '../vendor/autoload.php';

$mail = new PHPMailer(true); // instancie un new objet phpmailer
$body  =  file_get_contents ( ' contents.html ' );
//$mail->SMTPDebug = 2 ;
$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth  =  true ;
$mail->SMTPKeepAlive  =  true ;
$mail->Username = 'zegick.laforme@gmail.com';
$mail->Password = 'pingoleon42400';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->setFrom("colibri@gmail.com");
$mail->Subject = 'Planning de la Semaine';
$mail->msgHTML($body);
$mail->AltBody = 'Bienvenue a tous';



$mysql = mysqli_connect('localhost', 'Borne', 'il7o70jq6KQRFYpe');
mysqli_select_db($mysql, 'mydb');
$result = mysqli_query($mysql, 'SELECT mail FROM subscribers WHERE sent = FALSE');
foreach ($result as $row) {
    $mail->addAddress($row['mail']);
}
if (!$mail->send()) {
    echo "Mail Error (" . str_replace("@", "&#64;", $row["mail"]) . ') ' . $mail->ErrorInfo . '<br />';
    break; //Abandon sending
} else {
    echo "Message sent to :" . $row['mail'] . ')<br />';
    
    
}
require 'indexView.php';
?>