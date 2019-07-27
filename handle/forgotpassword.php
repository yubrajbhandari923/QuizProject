<?php
define('sql-connection_check',TRUE);
session_start();
if(!isset($_SERVER['HTTP_REFERER'])){
    include 'error.php';
    exit();
}
include 'sql-connection.php';
if(!isset($_POST['submit'])){
    $_SESSION['error1']='Please fill the details';
    header('location:../forgotpassword');
    exit();
}
if(!isset($_POST['emailid'])||empty($_POST['emailid'])){
    $_SESSION['error1']='Please fill the details';
    header('location:../forgotpassword');
    exit();
}
$email=mysqli_real_escape_string($sql_connect,$_POST['emailid']);
$email_check="SELECT * FROM account WHERE email='$email'";
$email_check_query=mysqli_query($sql_connect,$email_check);
$rows=mysqli_num_rows($email_check_query);
if($rows!==1){
    $_SESSION['error1']="This email is not associated with any account";
    header('location:../forgotpassword');
    exit();
}
top:
$pin=mt_rand(1000000,9999999);
if(mb_strlen($pin)!==7){
    goto top;
}
$db_update="UPDATE account SET pass_pin='$pin'";
mysqli_query($sql_connect,$db_update);
$to =$email;
$subject ='Quizee||Password Reset  Your password reset Code is:';
$message ="$pin";

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'From: b.anup.135@gmail.com>';
if(!mail($to, $subject, $message, implode("\r\n", $headers))){
    echo 'error';
}
?>