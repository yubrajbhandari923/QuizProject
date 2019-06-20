<?php 
include 'afterlog.php';
include 'user_profile.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title> Guffadi </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel=stylesheet href="refrences/fonts/fonts.css ">
        <link rel=stylesheet href='refrences/css/user_home-style.css'>
        <link rel=stylesheet href='refrences/css/header.css'>
        <script src='refrences/js/open-close.js'>    </script>
    </head>
    <body>
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
        <div>
            <div>
               <span><h2>Full Name:</h2> <h3> <?php echo $user_name; ?></h3> </span>
               <span><h2>User Name:</h2> <h3> <?php echo $user_username;?></h3> </span>
               <span><h2>Points earned:</h2> <h3> Points here</h3> </span>
               <span><h2>Global Rank:</h2> <h3> Rank here</h3> </span>
               <span><h2>Email:</h2> <h3><?php echo $user_email; ?></h3> </span>
                <h2><A href="#">Change Password</A></h2> 
            </div>
        </div> 
    </body>
</html>