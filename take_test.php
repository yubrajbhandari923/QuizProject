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
        <script src='refrences/js/ajax.js'></script>
        <script src="refrences/js/take-test-landing-script.js"></script>
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
        <div id=cover>
            <div class=form>
                   <h1> Take Test from world's Best collection of Quiz</h1>

                   <p><span> Fields:</span> <span> $display_fields.</span></p>   
                   <p><span> Difficulty Level</span> <span> <select name=difficultyLevel> <option value=easy> Easy </option><option value=medium> Medium </option><option value=hard> Hard </option> </select></span></p>   
                   <p><span> No. of questions:</span> <span> <input type=number max=50 min=10 name=noOfQuestion value=30></span></p>   
                   <p><span> Duration for each question:</span> <span> $display_time</span></p>   
                   <p><span> </span> <span> $display_time</span></p>   
            </div>
        </div>
    </body>
    </html>