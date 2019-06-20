<?php
    include 'sql-connection.php';
    $current_user=$_COOKIE['userid'];
    $select_user="SELECT * FROM account WHERE id='$current_user' ";
    $query_user_select=mysqli_query($sql_connect,$select_user);
    $row_check=mysqli_num_rows($query_user_select);
    if($row_check==1){
        $row=mysqli_fetch_assoc($query_user_select);
        $user_name=$row['name'];
        $user_username=$row['username'];
        $user_email=$row['email'];
    }
?>