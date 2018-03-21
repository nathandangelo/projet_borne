<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception ;
use PHPMailer\PHPMailer\SMTP;
include 'vendor/autoload.php';


$mail = new PHPMailer(true); // instancie un new objet phpmailer


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
    
    
    //requete de recuperation des email
    $sqlMail = new PDO('mysql:host=localhost;dbname=Borne','Borne','il7o70jq6KQRFYpe');
    $sqlMail = $connect_db->prepare("SELECT mail FROM subcribers");
    $sqlMail->execute();
    $tab = array();
    
    while($dataMail = $sqlMail->fetch(PDO::FETCH_OBJ))  {
        
        $tab[] = $dataMail;
        
        foreach($tab as $cle => $val){
            $mail->AddBCC(implode($val,''), ',' );
        }
    }
    $body  =  file_get_contents ( ' contents.html ' );
    
    
    if(!$mail->Send()){
        echo $mail->ErrorInfo;
    }
    $mail->SmtpClose();
    unset($mail);


require 'indexView.php';

?>