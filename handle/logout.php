<?php
    session_start();
    session_destroy();
    setcookie('userid','',time()-360000,'/');
    unset($_COOKIE['userid']);
    header('location:../login.php?page=log');
?>