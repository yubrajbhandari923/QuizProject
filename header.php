<?php
include 'handle/session-cookie_check.php';
?>
<header>
                <div class="user-info-butt" id="user-info-butt">
                 <?php echo  $_COOKIE['userpic'];?>
                    <div>
                        <span> <?php echo $username_user; ?> </span>
                        <span> <a href="my_account">Myaccount</a></span>
                        <span> <a href="handle/logout">Logout</a></span>
                    </div>

                </div>
                <div class="head-text">
                    Hey! <?php echo $name_user; ?>. Long Heading Text Here.
                </div>
                <div class="page-links">
                    <ul>
                        <li><a href="home">Home</a></li>
                        <li><a href="my_account">My account</a></li>
                    </ul>
                </div>
</header>
<script src='refrences/js/open-close.js'></script>