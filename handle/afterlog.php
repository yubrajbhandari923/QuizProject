<?php
 if(!defined('afterlog_check')){
     include '../error.php';
     exit;
 }
session_start();
include 'sql-connection.php';
    if(isset($_COOKIE['hafhk43'])){
        $c = new McryptCipher('secret key goes here');
        $user_id= $c->decrypt($_COOKIE['hafhk43']);
    }else{
        session_start();
        $_SESSION['error_direct']='Please login first';
        header('location:/QuizProject/login');
        exit();
    }
    $sel_name="SELECT * FROM account WHERE id='$user_id' ";
    $query_sel_name=mysqli_query($sql_connect,$sel_name);
    $name_user_fetch=mysqli_fetch_assoc($query_sel_name);
    $name_user=$name_user_fetch['name'];
    $username_user=$name_user_fetch['username'];  
?>