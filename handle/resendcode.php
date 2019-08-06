<?php
define('sql-connection_check',TRUE);
define('check',TRUE);
session_start();
if(!isset($_SERVER['HTTP_REFERER'])){
    include 'error.php';
    exit();
}
if(!isset($_COOKIE['fdgirt3'])){
    include 'error.php';
    exit();
}
include '../crypt.php';
include 'sql-connection.php';
$c = new McryptCipher('passKey');
$temp_userid = $c->decrypt($_COOKIE['fdgirt3']);
$email_check="SELECT * FROM account WHERE id='$temp_userid'";
$email_check_query=mysqli_query($sql_connect,$email_check);
$rows=mysqli_num_rows($email_check_query);
if($rows!==1){
    $_SESSION['error1']="This email is not associated with any account";
    header('location:../forgotpassword');
    exit();
}
$fetch_data=mysqli_fetch_assoc($email_check_query);
$email=$fetch_data['email'];
top:
$pin=mt_rand(1000000,9999999);
if(mb_strlen($pin)!==7){
    goto top;
}
$pin_time=time();
$db_update="UPDATE account SET pass_pin='$pin',pin_time='$pin_time' WHERE email='$email'";
mysqli_query($sql_connect,$db_update);

$temp_userid_sss =urlencode(serialize($fetch_data['id']));
$pin_encrypt = urlencode(serialize($pin));
$to =$email;
$subject ='Quizee||Password Reset  Your password reset Code is:';
$message ="<div style='width: 100%;height: 100%;display: flex;justify-content: center;align-items: center;'>
<section style='width: 100%;'>
<header style='padding: 20px;background: dodgerblue;color:white;'>
     <h1 style='font: 28px poppins;text-align:center;text-emphasis: weight;'>The Quiz Project App: Thank you for registering</h1>
</header>
<div  style='background: whitesmoke;padding: 50px;font: 20px passion;'>
    <h2 style='font: 22px acme;margin: 10px;'> Welcome to the quiz project app.</h2>
    <p> Thank you for registering. To continue you just need to follow one step more. <br>
     click on the button below to verify your account.</p>

     <p style='margin: 5px;'> Here are your account details.</p>
     <p style='margin: 20px;'> Name:".'$name'."<br>
    Verification code:<b>$pin</b>


     <a href='bee-proform.tk/handle/verify/$temp_userid_sss/$pin_encrypt' style='text-align:center;margin:0px 40px;text-decoration: none;color:white;display: block;'>
     <div style='font: 25px poppins;padding:5px;background: dodgerblue;width: 20vw;margin: auto;'>Verify Account</div></a>

     <p style='margin: 5px;'> If you are having any issues with your account please don't hegistate to contact us.
         <br> <h2> Thankyou ! Keep learning :) </h2>
     </p>
     <p> If you haven't registered in The Quiz project app. Please Ignore this mail. </p>
</div>
</section>
</div>
";
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$headers[] = 'From: b.anup.135@gmail.com>';
if(!mail($to, $subject, $message, implode("\r\n", $headers))){
    $_SESSION['error1']="Sorry error communicatiing with mail server";
    header('location:../forgotpassword');
    exit();
}
$c = new McryptCipher('passKey');
$temp_userid = $c->encrypt($fetch_data['id']);
$cookie_time=time()+60*3;
setcookie('fdgirt3',$temp_userid,$cookie_time,'/');
header('location:../verify');
exit();
?>