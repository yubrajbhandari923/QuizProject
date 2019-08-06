<?php
define('check',TRUE);
define('session-cookie_check',TRUE);
include 'handle/session-cookie_check.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title> Guffadi </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel=stylesheet href="refrences/fonts/fonts.css ">
        <link rel=stylesheet href='refrences/css/take_test_landing-style.css'>
        <link rel=stylesheet href='refrences/css/header.css'>
        <script src='refrences/js/jquery.js'></script>
        <script src='refrences/js/ajax.js'></script>
        <script src="refrences/js/take-test-landing-script.js"></script>
        <script src="refrences/js/playquiz.js"></script>
    </head>
    <body>
        <h1>
            Take a Quiz Test
        </h1>
        <div class="notification-container">
            <h2> Challenges</h2>
            <ul>
                <li>
                    <span class="a-challenge"> <span>$user_fullname has challenged you</span> <div class="butt blue-butt"> Take This</div></span>
                </li>
                <li>
                    <span class="a-challenge"> <span>$user_fullname has challenged you</span> <div class="butt blue-butt"> Take This</div></span>
                </li>
                <li>
                    <span class="a-challenge"> <span>$user_fullname has challenged you</span> <div class="butt blue-butt"> Take This</div></span>
                </li>
            </ul>
        </div>
        <div>
            <h2> Explore other quizzes</h2>
            <div class="quizzes-container">
<div class="btn btn-clicked">
   <svg width="100%" height="90px" viewbox="0,0,100,100" preserveAspectRatio="none">
    <path d="M0 100 L 100 100" fill="transparent" fill="transparent" stroke-width="5" stroke-dasharray="50" stroke="black"></path>
</svg>
  <div class="btn-value">Geography <i class="fas fa-check-circle" id="Done-select"></i>  </div>
  <input type="checkbox" name="selected-field" value="geography" >
</div>
<div class="btn btn-clicked">
   <svg width="100%" height="90px" viewbox="0,0,100,100" preserveAspectRatio="none">
    <path d="M0 100 L 100 100" fill="transparent" fill="transparent" stroke-width="5" stroke-dasharray="50" stroke="black"></path>
</svg>
  <div class="btn-value">History <i class="fas fa-check-circle" id="Done-select"></i>  </div>
  <input type="checkbox" name="selected-field" value="history" >
</div>
<div class="btn">
   <svg width="100%" height="90px" viewbox="0,0,100,100" preserveAspectRatio="none">
    <path d="M0 100 L 100 100" fill="transparent" fill="transparent" stroke-width="5" stroke-dasharray="50" stroke="black"></path>
</svg>
  <div class="btn-value">GK <i class="fas fa-check-circle" id="Done-select"></i>  </div>
  <input type="checkbox" name="selected-field" value="gk" >
</div>


        </div>





        <div id=cover style=''>
            <form class=form onsubmit='return playomniquiz()'>
                   <h1> Take Test from world's Best collection of Quiz</h1>
                    <input type="hidden" name="field_select">
                   <p><span> Fields:</span> <span id='field_select'> </span></p>
                   <p><span> Difficulty Level</span> <span> <select name=level > <option value=easy> Easy </option><option value=medium> Medium </option><option value=hard> Hard </option> </select></span></p>
                   <p><span> No. of questions:</span> <span> <input type=number max=50 min=1 name=no value=30 id='num_select'></span></p>
                   <p><span> Duration for each question:</span> <span id="duration"></span></p>
                    <p>
                   <button class='butt green-butt' type='submit'> Proceed </button> <span class='butt red-butt' id="cancel-butt"> Cancel </span></p>
</div>
            </form>
        </div>
    </body>
    </html>
