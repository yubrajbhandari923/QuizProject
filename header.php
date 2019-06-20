<header>
                <div class="user-info-butt" id="user-info-butt">
                 <?php echo  $_SESSION['user-letter'];?>
                    <div>
                        <span> <?php echo $username_user; ?> </span>
                        <span> <a href="#">Myaccount</a></span>
                        <span> <a href="logout.php">Logout</a></span>
                    </div>

                </div>
                <div class="head-text">
                    Hey! <?php echo $name_user; ?>. Long Heading Text Here.
                </div>
                <div class="page-links">
                    <ul>
                        <li><a>My account</a></li>
                        <li><a>Search</a></li>
                        <li><a>Notifications</a></li>
                    </ul>
                </div>
        </header>