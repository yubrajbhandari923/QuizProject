<?php
define('session-cookie_check',TRUE);
if(!isset($_SERVER['HTTP_REFERER'])){
    echo "Page no found";
    exit;
}
include 'handle/session-cookie_check.php';
?>