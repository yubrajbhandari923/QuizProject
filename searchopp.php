<?php
include 'sql-connection.php';
    $user_query=$_GET['text'];
    $select_name='SELECT * FROM account';
    $query_select_name=mysqli_query($sql_connect,$select_name);
    while($row=mysqli_fetch_assoc($query_select_name)){
        $compare_str=strncasecmp($user_query,$row['name'],strlen($user_query));
        if($compare_str==0){
            echo $row['name'];
        }
    }
?>