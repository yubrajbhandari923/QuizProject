<header>
                <div class="user-info-butt" id="user-info-butt">
                 <?php echo  $_SESSION['user-letter'];?>
                    <div>
                        <span> <?php echo $username_user; ?> </span>
                        <span> <a href="my_account.php">Myaccount</a></span>
                        <span> <a href="handle/logout.php">Logout</a></span>
                    </div>

                </div>
                <div class="head-text">
                    Hey! <?php echo $name_user; ?>. Long Heading Text Here.
                </div>
                <div class="page-links">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="my_account.php">My account</a></li>
                    </ul>
                </div>
</header>