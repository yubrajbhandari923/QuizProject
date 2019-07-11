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
                <div class="page-links">
                    <ul>
                        <li><a href="home">Home</a></li>
                        <li><a href="my_account">My account</a></li>
                        <li><a id="search-icon"><i class="fa fa-search"></i></a></li>
                    </ul>              
                    <form id=search-form>
                        <i  id=search-ham class=" bar fa fa-bars"></i>
                        <input name=player-search type=text placeholder="Search a person to challenge here." id='search-player' onkeyup='getname(this.value)'>
                         <button type=submit>
                            <span class="fa fa-send"></span>
                        </button>
                    </form>
                    <div class="search-result"> </div>
                </div>
                <!-- <div class="head-text">
                    Hey! <?php echo $name_user; ?>. Long Heading Text Here.
                </div> -->
            </header>
            <script src='refrences/js/open-close.js'></script> 
            <script src='refrences/js/ajax.js'></script>
       