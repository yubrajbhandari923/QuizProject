<?php
    include 'connect-quiz-ques.php';
    $setname=mysqli_real_escape_string($sql_connect,$_GET['set']);
    $userid=$_COOKIE['userid'];
    $select_set="DELETE * FROM sets WHERE id='$userid' AND setname='$setname' ";
    mysqli_query($sql_connect,$select_set);
    header('location:../manage_quiz.php');
?>