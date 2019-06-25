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
        <link rel=stylesheet href='refrences/css/myaccount-style.css'>
        <link rel=stylesheet href='refrences/css/header.css'>
        <script src='refrences/js/jquery.js'>    </script>
        <script src='refrences/js/open-close.js'>    </script>
        <script src='refrences/js/myaccount-script.js'>    </script>
        <script src='refrences/js/password-name-change.js'>    </script>
    </head>
    <body>
    <?php include 'header.php'; ?>
    <div id="cover"></div>
    <form id="formConfirm" autocomplete='off' onsubmit='return passchange()'>
        <div class="close-section fa fa-window-close"></div>
        Change Your Password
        <div class="errorMsgForm"> Error </div>
        
        <input type='password' placeholder="Enter your Old password" id='oldpass'>

        <input type='password' placeholder="Enter your New password" id='newpass'/>

        <input type='password' placeholder="Confirm your New password" id='confirmpass'/>
        
        <button class="butt green-butt" type=submit id='pass_submit'> Done </button>
        
    </form>
    <form id="formChangeName" autocomplete="off" onsubmit='return namechange()'>
        <div class="close-section fa fa-window-close"></div>
        Change Your Full Name
        <div class="errorMsgForm"> Error </div>
        
        <input type=text placeholder="Enter your New Full Name" id='fullname'>
        <input type=password placeholder="Enter your password" id='password'>
        
        <button class="butt green-butt" type=submit id='submit_namechange'> Done </button>
        
    </form>
        <div>
            <div class="data-container">
               <span><h2>Full Name:</h2> <h3> <?php echo $user_name; ?></h3> <a href="#" onclick="changeName()"> Edit </a></span>
               <span><h2>User Name:</h2> <h3> <?php echo $user_username;?></h3> </span>
               <span><h2>Points earned:</h2> <h3> <?php echo $points;?></h3> </span>
               <span><h2>Global Rank:</h2> <h3><?php echo $global_rank;?></h3> </span>
               <span><h2>Email:</h2> <h3><?php echo $user_email; ?></h3> </span>
                <h2><A href="#" onclick="confirmPsd()">Change Password</A></h2> 
            </div>
        </div> 
    </body>
</html>