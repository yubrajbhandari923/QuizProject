<?php 
include 'sql-connection.php';
    if(isset($_COOKIE['userid'])){
        $user_id=$_COOKIE['userid'];
    }else{
        header('location:login.php?page=log');
        exit();
    }
    $sel_name="SELECT * FROM account WHERE id='$user_id' ";
    $query_sel_name=mysqli_query($sql_connect,$sel_name);
    $name_user_fetch=mysqli_fetch_assoc($query_sel_name);
    $name_user=$name_user_fetch['name'];
    $username_user=$name_user_fetch['username'];
?>