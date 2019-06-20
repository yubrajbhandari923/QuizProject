<?php
    session_start();
    session_destroy();
    setcookie('userid','',time()-36000);
    header('location:../login.php?page=log');
?>