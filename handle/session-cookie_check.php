<?php
    if(!isset($_COOKIE['hafhk43'])){
        session_start();
        $_SESSION['error_direct']='Please login first';
        header('location:/QuizProject/login');
        exit();
    }
    if(!isset($_COOKIE['nbie09'])){
        session_start();
        $_SESSION['error_direct']='Please login first';
        header('location:/QuizProject/login');
        exit();
    }