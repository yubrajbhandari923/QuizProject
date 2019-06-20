<?php
session_start();
if(isset($_COOKIE['userid'])){
        header('location:home.php');
    }
    if(isset($_SESSION['id'])){
        echo $_SESSION['id'];
        header('location:home.php');
    }
    ?>