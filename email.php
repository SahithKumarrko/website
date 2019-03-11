<?php

require_once 'sahith/vendor/autoload.php';



function sendMail($to){
$mail = new PHPMailer\PHPMailer\PHPMailer;
$sent=false;
$mail->isSMTP();
echo "1";
$mail->SMTPAuth=true;
echo "2";
$mail->SMTPSecure = 'ssl';
echo "3";
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->Username = 'sahithkumarrko@gmail.com';
$mail->Password = 'znffmcqzfxyoivqp';
echo "4";
$mail->isHTML();
$mail->Body = "<a href='phpcode.com'>click here</a>";
$mail->setFrom('sahithkumarrko@gmail.com');
$mail->addAddress($to);

if($mail->Send()){
    $sent=true;
    echo "hii";
}
echo "jsdasdasda";
return $sent;
}
echo sendMail("sahithkumarrko@gmail.com");

?>