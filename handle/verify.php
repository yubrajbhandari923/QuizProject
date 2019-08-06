<?php
define('sql-connection_check',TRUE);
define('check',TRUE);
include '../crypt.php';
if(isset($_GET['c1'])){
    $userid_getss=unserialize(urldecode($_GET['c1']));
    $c = new McryptCipher('passKey');
    $kjsk= $c->encrypt($userid_getss);
    $_POST['submit']='SET';
    setcookie('fdgirt3',$kjsk,time()+60*4,'/');
}
if(isset($_GET['c66'])){
    $_POST['vercode']=unserialize(urldecode($_GET['c66']));
}
session_start();
if(!isset($_COOKIE['fdgirt3'])){
    include 'error.php';
    exit();
}
if(!isset($_SERVER['HTTP_REFERER'])){
    include 'error.php';
    exit();
}
include 'sql-connection.php';
if(!isset($_POST['submit'])){
    $_SESSION['error1']='Enter your verification code';
    header('location:../verify');
    exit();
}
if(!isset($_POST['vercode'])||empty($_POST['vercode'])){
    $_SESSION['error1']='Enter your verification code';
    header('location:../verify');
    exit();
}
$vercode=mysqli_real_escape_string($sql_connect,$_POST['vercode']);
$c = new McryptCipher('passKey');
$decrypted_user= $c->decrypt($_COOKIE['fdgirt3']);
$select_user="SELECT * FROM account WHERE id='$decrypted_user'";
$select_user_query=mysqli_query($sql_connect,$select_user);
$num_rows=mysqli_num_rows($select_user_query);
if($num_rows!==1){
    $_SESSION['error1']='Your email is not valid';
    header('location:../forgotpassword');
    exit();
}
$fetch_data=mysqli_fetch_assoc($select_user_query);
$vercode_db=$fetch_data['pass_pin'];
$time_db=$fetch_data['pin_time'];
$time_diff=time()-$time_db;
if($time_diff>=172800){
    $_SESSION['error1']='Sorry|Your verification code has expired';
    header('location:../verify');
    exit();
}
if($vercode!==$vercode_db){
    $_SESSION['error1']='Your code is not valid';
    header('location:../verify');
    exit();
}else{
    header('location:../changepassword');
    exit();
}