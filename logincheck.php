<?php
session_start();
include 'sql-connection.php';
if(empty($_POST['username1'])){
    $_SESSION['error1']='Enter your email or username';
    header('location:login.php?page=log');
    exit();
}else{
    $user=mysqli_real_escape_string($sql_connect,$_POST['username1']);
}
if(empty($_POST['password1'])){
    $_SESSION['error1']='Enter your password';
    header('location:login.php?page=log');
    exit();
}else{
    $pass=mysqli_real_escape_string($sql_connect,$_POST['password1']);
}
$login_q="SELECT * FROM account WHERE username='$user' AND password='$pass'";
$query_login=mysqli_query($sql_connect,$login_q);
$rows=mysqli_num_rows($query_login);
$get_id=mysqli_fetch_assoc($query_login);
$user_id=$get_id['id'];
$cookie_time=time()+60*60*60*24;
setcookie('userid',$user_id,$cookie_time);
if($rows==1){
    header('location:home.php');
    exit();
}else{
    $_SESSION['error1']='Incorrect username or Password';
    header('location:login.php?page=log');
    exit();
}


?>