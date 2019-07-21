<?php
include 'session-cookie_check.php';
require 'PHPMailerAutoload.php';
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
$mail->addAddress($_POST['emailid']);
$mail->addReplyTo(EMAIL);
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Succesfully registered ';
$mail->Body    ="
<div style='width: 100%;height: 100%;display: flex;justify-content: center;align-items: center;'>
<section style='width: 100%;'>
<header style='padding: 20px;background: dodgerblue;color:white;'>
     <h1 style='font: 28px poppins;text-align:center;text-emphasis: weight;'>The Quiz Project App: Thank you for registering</h1>
</header>
<div  style='background: whitesmoke;padding: 50px;font: 20px passion;'>
    <h2 style='font: 22px acme;margin: 10px;'> Welcome to the quiz project app.</h2>
    <p> Thank you for registering. To continue you just need to follow one step more. <br>
     click on the button below to verify your account.</p>

     <p style='margin: 5px;'> Here are your account details.</p>
     <p style='margin: 20px;'> Name:".$name."<br>
    UserName:".$username."<br>
    Email: ".$email."</p>


     <a href='#' style='text-align:center;margin:0px 40px;text-decoration: none;color:white;display: block;'>
     <div style='font: 25px poppins;padding:5px;background: dodgerblue;width: 20vw;margin: auto;'>Verify Account</div></a>

     <p style='margin: 5px;'> If you are having any issues with your account please don't hegistate to contact us.
         <br> <h2> Thankyou ! Keep learning :) </h2>
     </p>
     <p> If you haven't registered in The Quiz project app. Please Ignore this mail. </p>
</div>
</section>
</div>
";
if(!$mail->send()) {
    echo 'Message could not be sent.';
} else {
    echo 'Message has been sent';
}
?>





