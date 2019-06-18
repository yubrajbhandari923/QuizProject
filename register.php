<?php
session_start();
    include 'sql-connection.php';
    if(empty($_POST['fullname'])){
        $_SESSION['error']='Please enter your name';
        header('location:login.php?page=reg');
        exit();
    }else{
        $name=mysqli_real_escape_string($sql_connect,$_POST['fullname']);
    }
    if(empty($_POST['emailid'])){
        $_SESSION['error']='Please enter your email';
        header('location:login.php?page=reg');
        exit();
    }else{
        $email=mysqli_real_escape_string($sql_connect,$_POST['emailid']);
    }
    if(empty($_POST['username'])){
        $_SESSION['error']='Please enter your username';
        header('location:login.php?page=reg');
        exit();
    }else{
        $username=mysqli_real_escape_string($sql_connect,$_POST['username']);
    }
    if(empty($_POST['password'])){
        $_SESSION['error']='Please enter your password';
        header('location:login.php?page=reg');
        exit();
    }else{
        $password=mysqli_real_escape_string($sql_connect,$_POST['password']);
    }
    if(strlen($password)<8){
        $_SESSION['error']='Password should be at least 8 character';
        header('location:login.php?page=reg');
        exit();
    }
    $check_email="SELECT * FROM account WHERE email='$email'";
    $query_check_email=mysqli_query($sql_connect,$check_email);
    $check_username="SELECT * FROM account WHERE username='$username'";
    $query_check_username=mysqli_query($sql_connect,$check_username);

    $row_email=mysqli_num_rows($query_check_email);
    if($row_email>=1){
        $_SESSION['error']='Email is already used';
        header('location:login.php?page=reg');
        exit();
    }
    $row_username=mysqli_num_rows($query_check_username);
    if($row_username>=1){
        $_SESSION['error']='Username is already taken';
        header('location:login.php?page=reg');
        exit();
    }
    $record="INSERT INTO account(name,username,email,password) VALUES('$name','$username','$email','$password')";
    mysqli_query($sql_connect,$record);
?>