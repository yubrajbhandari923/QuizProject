<?php 
    include 'handle/check-status.php';
    include 'handle/check-user_cookie.php';
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title> Guffadi </title>
        <link rel=stylesheet href="refrences/fonts/fonts.css ">
        <link rel=stylesheet href='refrences/css/index-style.css'>
        <script>
            window.onload = function() {
                document.querySelector(".reg-btn").onclick = function(){
                    window.location.href = window.location.href + "login.php<?php echo '?page=reg'; ?> ";
                    
                }
                document.querySelector(".log-btn").onclick = function(){
                    window.location.href = window.location.href+ "login.php<?php echo '?page=log'; ?>";
                }
            }
         </script>
    </head>
    <body>
            <section class="container">
                    <section class=hero> 
                        <div class="texts">
                            <h1 class="headtext">Guffadi : ChatApp</h1>
                            <p class="paratext"> Chat with anyone. Fast, Free and Private</p>
                        </div>
                        <div class="btn-container">
                            <button class="reg-btn">Create an Account</button>
                            <button class="log-btn">Log In</button>
                        </div>
                    </section>
                </section>
    </body>
</html>