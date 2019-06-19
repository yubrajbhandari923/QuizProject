<?php
    session_destroy();
    setcookie('userid','',time()-3600);
    header('location:login.php?page=log');
?>