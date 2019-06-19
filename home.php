<?php 
include 'afterlog.php';
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
    <script>
        // functionality for User-info-butt
        window.onload = function(){
            data ={
                UIB : true
            }
            document.querySelector("#user-info-butt").onclick = function(){
            if (data.UIB){
                document.querySelector("#user-info-butt > div").style.display = "block";
                data.UIB= false ;
            } else {
                document.querySelector("#user-info-butt > div").style.display = "none";
                data.UIB= true ;
            }
            }
        }
    </script>
    <script src='ajax.js'></script>
    <body>
            <header>
                    <div class="user-info-butt" id="user-info-butt"> 
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
                <section class="container">
                    <section class="hero">
                        <div class="butt-contain">                            
                            <button class="butt manage-quiz"> Manage questions </button>
                            <span class="helptxt"> Manage questions of your quiz set. </span>
                           
                            <button class="butt Take-quiz"> Take a quiz test </button>
                            <span class="helptxt"> Take a test and learn new questions. </span>
                        </div>
                        
                        <div class="notifications-contain">
                            <div class="subhead-text">Notification!</div>
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
                                <!-- <div class="a-result">
                                    <div class="opponent-userpic"> </div>
                                    <span id='result-search'></span>
                                    <div class="butt challenge-opponent"> Challenge</div>
                                    <div class="butt view-profile-opponent"> View Profile</div>
                                </div> -->
                            </div>
                        </div>
                    </section>
                    
                    
                </section>
    </body>
</html>