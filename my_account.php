<?php 
include 'handle/afterlog.php';
include 'handle/user_profile.php';
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
    <?php include 'header.php'; ?>
        <div>
            <div>
               <span><h2>Full Name:</h2> <h3> <?php echo $user_name; ?></h3> </span>
               <span><h2>User Name:</h2> <h3> <?php echo $user_username;?></h3> </span>
               <span><h2>Points earned:</h2> <h3> <?php echo $points;?></h3> </span>
               <span><h2>Global Rank:</h2> <h3><?php echo $global_rank;?></h3> </span>
               <span><h2>Email:</h2> <h3><?php echo $user_email; ?></h3> </span>
                <h2><A href="#">Change Password</A></h2> 
            </div>
        </div> 
    </body>
</html>