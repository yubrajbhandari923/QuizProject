<?php
// if(!defined('sql-connection_check')){
//     include 'error.php';
//     exit();
//     }
// $sql_connect=mysqli_connect('localhost','id310133_anup8eguy','Bhusal12');
// $db_connect=mysqli_select_db($sql_connect,'id310133_beemarsh');
// mysqli_query($sql_connect,$db_connect);

// if(!defined('sql-connection_check')){
//     include 'error.php';
//     exit();
//     }
// $sql_connect=mysqli_connect('sql205.epizy.com','epiz_24238078','a8MlToyeWfTG9w');
// $db_connect=mysqli_select_db($sql_connect,'epiz_24238078_user_record');
// mysqli_query($sql_connect,$db_connect);

if(!defined('sql-connection_check')){
    include 'error.php';
    exit();
    }
$sql_connect=mysqli_connect('localhost','root','');
$db_connect=mysqli_select_db($sql_connect,'user_record');
mysqli_query($sql_connect,$db_connect);
 ?>