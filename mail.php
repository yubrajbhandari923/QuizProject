<?php
require 'PHPMailerAutoload.php';
require 'credential.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 4;                              

$mail->isSMTP();                                  
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = EMAIL;
$mail->Password = PASS;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom(EMAIL, 'Quizee');
$mail->addAddress('anup8eguy@gmail.com');
$mail->addReplyTo(EMAIL);
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Succesfully registered ';
$mail->Body    = "    <div style='height: 30%;width: 80%;background: whitesmoke;margin: auto;text-align: center;'>
<h1>Quizee</h1>
<h1 style='font-size: 2vw;'>Congratulations! ..... You have successfully registered!</h1>
<a href='#' class='button red'><span>Verify</span>account</a><br>
Your verification code is:.....
</div>
<style>
.button {
display: inline-block;
height: 50px;
line-height: 50px;
padding-right: 30px;
padding-left: 70px;
position: relative;
background-color:rgb(41,127,184);
color:rgb(255,255,255);
text-decoration: none;
text-transform: uppercase;
letter-spacing: 1px;
margin-bottom: 15px;


border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
text-shadow:0px 1px 0px rgba(0,0,0,0.5);
-ms-filter:'progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#ff123852,Positive=true)';zoom:1;
filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#ff123852,Positive=true);

-moz-box-shadow:0px 2px 2px rgba(0,0,0,0.2);
-webkit-box-shadow:0px 2px 2px rgba(0,0,0,0.2);
box-shadow:0px 2px 2px rgba(0,0,0,0.2);
-ms-filter:'progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=2,Color=#33000000,Positive=true)';
filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=2,Color=#33000000,Positive=true);
}

.button span {
position: absolute;
left: 0;
width: 70px;
background-color:rgba(0,0,0,0.5);

-webkit-border-top-left-radius: 5px;
-webkit-border-bottom-left-radius: 5px;
-moz-border-radius-topleft: 5px;
-moz-border-radius-bottomleft: 5px;
border-top-left-radius: 5px;
border-bottom-left-radius: 5px;
border-right: 1px solid  rgba(0,0,0,0.15);
}

.button:hover span, .button.active span {
background-color:rgb(0,102,26);
border-right: 1px solid  rgba(0,0,0,0.3);
}

.button:active {
margin-top: 2px;
margin-bottom: 13px;

-moz-box-shadow:0px 1px 0px rgba(255,255,255,0.5);
-webkit-box-shadow:0px 1px 0px rgba(255,255,255,0.5);
box-shadow:0px 1px 0px rgba(255,255,255,0.5);
-ms-filter:'progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#ccffffff,Positive=true)';
filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#ccffffff,Positive=true);
}
.button.red {
background: #e74c3c;
}
</style>";
$mail->AltBody = 'Congratulations!You have successfully registered!
verify your account
Your verification code is ......
';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>