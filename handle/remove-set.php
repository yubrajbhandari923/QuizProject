<?php
include '../crypt.php';
include 'session-cookie_check.php';
    include 'connect-quiz-ques.php';
    $setname=mysqli_real_escape_string($sql_connect,$_GET['set']);
    $userid_encrypt=$_COOKIE['hafhk43'];
 $c = new McryptCipher('passKey');
 $userid = $c->decrypt($userid_encrypt);
    $select_set="DELETE FROM sets WHERE id='$userid' AND setname='$setname' ";
    mysqli_query($sql_connect,$select_set);
    header('location:../../manage_quiz');
?>