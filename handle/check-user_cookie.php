<?php
if(!defined('check-user_cookie_check')){
     include 'error.php';
     exit;
 }
if(isset($_COOKIE['hafhk43'])&& isset($_COOKIE['nbie09'])){
        header('location:home');
    }
?>