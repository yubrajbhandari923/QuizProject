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
            <form>
                <div>
                    <label class=fieldtype-container>
                        <input type="radio" name="fieldType" onchange="unFlipIt()"  value="single" checked>
                      <span> Choose single field </span>
                    </label>
                    <label class=fieldtype-container>
                        <input type="radio" name="fieldType" onchange="flipIt()" value="multiple">
                      <span> Choose multiple fields </span>
                    </label>
                </div>
                <div class=flipbox >
                    <div id="flip-scene" >
                    <div class=frontface>
                        <input name="onefield" value="Geography" type="submit">
                        <input name="onefield" value="Literature" type="submit">
                        <input name="onefield" value="Science" type="submit">
                        <input name="onefield" value="History" type="submit">
                        <input name="onefield" value="Mixed" type="submit">
                    </div>
                    <div class=backface>

                        <label class=checkbox-container>
                        <input type="checkbox" name="multifield" value="Geography">
                        <span>Geography</span>
                    </label>

                        <label class=checkbox-container>
                            <input type="checkbox" name="multifield" value="Literature">
                        <span> Literature</span>
                        </label>

                        <label class=checkbox-container>
                        <input type="checkbox" name="multifield" value="Science">
                        <span> Science</span>
                        </label>

                        <label class=checkbox-container>
                        <input type="checkbox" name="multifield" value="History">
                        <span> History</span>
                        </label>

                        <label class=checkbox-container>
                        <input type="checkbox" name="multifield" value="Mixed">
                        <span> Mixed</span>
                    </label>

                        <button class="butt" type=submit> Lets GO!</button>

                    </div>
                </div>
                </div>
            </form>
        </div>
        <div id=cover style='display:block;'>
            <form class=form onsubmit='return playomniquiz()'>
                   <h1> Take Test from world's Best collection of Quiz</h1>

                   <p><span> Fields:</span> <select name=field id='field_select'>
                    <option value="Geography">Geography</option>
                    <option value="Science">Science</option>
                    <option value="History">History</option>
                    <option value="Literature">Literature</option>
                    <option value="Mixed">Mixed</option>
                </select></p>
                   <p><span> Difficulty Level</span> <span> <select name=level id='level_select'> <option value=easy> Easy </option><option value=medium> Medium </option><option value=hard> Hard </option> </select></span></p>
                   <p><span> No. of questions:</span> <span> <input type=number max=50 min=1 name=no value=30 id='num_select'></span></p>
                   <p><span> Duration for each question:</span> <span> $display_time</span></p>
                    <p>
                   <button class='butt green-butt' type='submit'> Proceed </button> <span class='butt red-butt'> Cancel </span></p>
            </form>
        </div>
    </body>
    </html>