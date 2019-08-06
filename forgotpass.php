<?php
define('sql-connection_check',TRUE);
define('mail_check',TRUE);
define('check',TRUE);
define('verifyemail_check',TRUE);
session_start();
if(!isset($_SERVER['HTTP_REFERER'])){
    include 'error.php';
    exit();
}
include 'crypt.php';
include 'handle/sql-connection.php';
require_once 'handle/VerifyEmail.class.php';
if(!isset($_POST['submit'])){
    $_SESSION['error1']='Please fill the details';
    header('location:forgotpassword');
    exit();
}
if(!isset($_POST['emailid'])||empty($_POST['emailid'])){
    $_SESSION['error1']='Please fill the details';
    header('location:forgotpassword');
    exit();
}
$email=mysqli_real_escape_string($sql_connect,$_POST['emailid']);
$email_check="SELECT * FROM account WHERE email='$email'";
$email_check_query=mysqli_query($sql_connect,$email_check);
$rows=mysqli_num_rows($email_check_query);
if($rows!==1){
    $_SESSION['error1']="This email is not associated with any account";
    header('location:forgotpassword');
    exit();
}
$fetch_data=mysqli_fetch_assoc($email_check_query);
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
//    Initialize library class
    // $mail = new VerifyEmail();
    // // Set the timeout value on stream
    // // $mail->setStreamTimeoutWait(20);
    // // Set debug output mode
    // // $mail->Debug= TRUE;
    // // $mail->Debugoutput= 'html';
    // // Set email address for SMTP request
    // $mail->setEmailFrom(EMAIL); // you can type what email you want
    // // Check if email is valid and exist
    // $result = $mail->check($email);
    // header('Content-Type: application/json');
    // switch ($result) {
    //     case 0:
    //         $_SESSION['error1']= 'E-mail is not valid';
    //         header('location:forgotpassword');
    //         exit;
    //         break;
    //   case 1:
            include 'handle/mail.php';
    //         break;
    //     case 2:
    //     $_SESSION['error1']= 'This is not a valid email address';
    //     header('location:forgotpassword');
    //     exit;
    //         break;
    //     case 3:
    //     $_SESSION['error1']= 'Please check your internet connection';
    //     header('location:forgotpassword');
    //     exit;
    //     break;
    // }
// $to =$email;
// $subject ='Quizee||Password Reset  Your password reset Code is:';
// $message ="<div style='width: 100%;height: 100%;display: flex;justify-content: center;align-items: center;'>
// <section style='width: 100%;'>
// <header style='padding: 20px;background: dodgerblue;color:white;'>
//      <h1 style='font: 28px poppins;text-align:center;text-emphasis: weight;'>The Quiz Project App: Thank you for registering</h1>
// </header>
// <div  style='background: whitesmoke;padding: 50px;font: 20px passion;'>
//     <h2 style='font: 22px acme;margin: 10px;'> Welcome to the quiz project app.</h2>
//     <p> Thank you for registering. To continue you just need to follow one step more. <br>
//      click on the button below to verify your account.</p>

//      <p style='margin: 5px;'> Here are your account details.</p>
//      <p style='margin: 20px;'> Name:".'$name'."<br>
//     Verification code:<b>$pin</b>


//      <a href='bee-proform.tk/handle/verify/$temp_userid_sss/$pin_encrypt' style='text-align:center;margin:0px 40px;text-decoration: none;color:white;display: block;'>
//      <div style='font: 25px poppins;padding:5px;background: dodgerblue;width: 20vw;margin: auto;'>Verify Account</div></a>

//      <p style='margin: 5px;'> If you are having any issues with your account please don't hegistate to contact us.
//          <br> <h2> Thankyou ! Keep learning :) </h2>
//      </p>
//      <p> If you haven't registered in The Quiz project app. Please Ignore this mail. </p>
// </div>
// </section>
// </div>
// ";
// $headers[] = 'MIME-Version: 1.0';
// $headers[] = 'Content-type: text/html; charset=iso-8859-1';
// $headers[] = 'From: b.anup.135@gmail.com>';
// if(!mail($to, $subject, $message, implode("\r\n", $headers))){
//     $_SESSION['error1']="Sorry error communicatiing with mail server";
//     header('location:forgotpassword');
//     exit();
// }
$c = new McryptCipher('passKey');
$temp_userid = $c->encrypt($fetch_data['id']);
$cookie_time=time()+60*3;
setcookie('fdgirt3',$temp_userid,$cookie_time,'/');
header('location:verify');
exit();
?>