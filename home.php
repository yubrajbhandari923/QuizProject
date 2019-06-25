<?php 
include 'handle/afterlog.php';
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
    </head>
    <script src='refrences/js/open-close.js'>    </script>
    <script src='refrences/js/ajax.js'></script>
    <body>
    <?php 
    include 'header.php'; 
    ?>
                <section class="container">
                    <section class="hero">
                        <div class="butt-contain">                            
                            <a  href='manage_quiz.php'> <button class="butt manage-quiz"> Manage questions </button> </a>
                            <span class="helptxt"> Manage questions of your quiz set. </span>
                            <br>
                            <button class="butt Take-quiz"> Take a quiz test </button>
                            <span class="helptxt"> Take a test and learn new questions. </span>
                        </div>
                        
                        <div class="notifications-contain">
                            <h2 class="subhead-text">Notification!</h2>
                            <div>
                                <div class="a-notification" id="note-1"> 
                                    <div class="opponent-userpic"> </div>
                                    <span> $Oppoenent_name has challenged you.</span>
                                </div>
                                <div class="a-notification" id="note-1"> 
                                    <div class="opponent-userpic"> </div>
                                    <span>$Oppoenent_name accepted your challenge and scored $opponent_score in your quiz set.</span>
                                </div>
                            </div>
                        </div>

                        <div class="search-contain">
                            <form>
                            <input name=player-search type=text placeholder="Search a person to challenge here." id='search-player' onkeyup='getname(this.value)'>
                            <button type=submit>
                                <span class="fa fa-send"></span>
                            </button>
                        </form> 
                        <div class="search-result">
                            </div>
                        </div>
                    </section>
                    
                    
                </section>
    </body>
</html>