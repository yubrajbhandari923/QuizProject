<?php
define('check',TRUE);
define('session-cookie_check',TRUE);
session_start();
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
        <link rel=stylesheet href='refrences/css/take_test_main-style.css'>
        <link rel=stylesheet href='refrences/css/header.css'>
        <script src='refrences/js/jquery.js'></script>
        <script src='refrences/js/ajax.js'></script>
        <script src="refrences/js/take-test-main-script.js"></script>
        <script src='refrences/js/questionget.js'></script>
    </head>
    <body>
        <div class=cover>
            <div id=readyText>
                <span> Ready</span>
            </div>
        </div>
        <section class=container>
            <section class=hero>
            <div class="Q-Box">
                    <div class="qno">1/30</div>
                  <span> A vey vey very very very very  very very very long Question goes here!</span>
                  <div class="Q-data">
                      <span class= "Q-field">Field : <span id="qfield"> data</span></span>
                      <span class= "Q-field">Field : <span id="qfield"> data</span></span>
                  </div>
              </div>
              <div class="Opt-box">
                  <div class="Opt">Option 1</div>
                  <div class="Opt">Option 2</div>
                  <div class="Opt">Option 3</div>
                  <div class="Opt">Option 4</div>
              </div>
            </section>
        </section>
    </body>
    <script>var data=<?php if(isset($_SESSION['data'])){echo $_SESSION['data'];}?></script>
</html>