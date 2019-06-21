<?php
$sql_connect=mysqli_connect('localhost','root');
$db_connect=mysqli_select_db($sql_connect,'quiz_data');
mysqli_query($sql_connect,$db_connect);
?>