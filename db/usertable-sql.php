<?php
//Run this page and your database and table will be ready
$sql_connect=mysqli_connect('localhost','root');
$new_db='CREATE DATABASE user_record';
mysqli_query($sql_connect,$new_db);
mysqli_select_db($sql_connect,'account');
$newtable="CREATE TABLE MyGuests (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name TEXT NOT NULL,
    username TEXT NOT NULL,
    email TEXT NOT NULL,
    password TEXT NOT NULL
    )";
    mysqli_query($sql_connect,$newtable);
    ?>