<?php

require('email/class.phpmailer.php');
require('email/class.smtp.php');

Class Email extends Phalcon\Mvc\User\Component {

    private $Hostname = 'smtp.gmail.com';
    private $Username = 'user@gmail.com';
    private $Password = 'password here';
    private $Port = '465';
    private $FromEmail = 'from@gmailaddress.com';
    private $FromTitle = 'Mail Title';


    function sendEmail($To,$Subject,$Body) {

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->From = $this->FromEmail;
        $mail->Sender = $this->FromEmail;
        $mail->FromName = $this->FromTitle;
        $mail->SMTPSecure = "ssl";
        $mail->Host = $this->Hostname;
        $mail->SMTPAuth = true;
        $mail->Username = $this->Username;
        $mail->Password = $this->Password;
        $mail->Port = $this->Port;
        $mail->WordWrap = 50;
        $mail->IsHTML(true); //
        $mail->Subject =$Subject;

        $mail->Body = $Body;
        $mail->AltBody = $this->FromTitle;

        $mail->AddAddress($To);
        $mail->addBcc('bgurpinar@hangisi.net');

        if ($mail->Send()) {

            return true;
        }
        else {

            return false;

        }
        $mail->ClearAddresses();
        $mail->ClearAttachments();

    }


}
