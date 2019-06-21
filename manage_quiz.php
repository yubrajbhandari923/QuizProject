<?php 
include 'handle/afterlog.php';
    if(isset($_SESSION['error_add_quiz'])){
        echo  $_SESSION['error_add_quiz'];
    }
?>
<!DOCTYPE Html>
<html>
    <head>
        <title> Guffadi</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel=stylesheet href="refrences/fonts/fonts.css ">
        <link rel=stylesheet href='refrences/css/manage_quiz-style.css'>
        <link rel=stylesheet href='refrences/css/header.css'>
        <script src='refrences/js/open-close.js'></script>
    </head>
    <body>
        <?php 
        include 'header.php'; 
        ?>
    
        <h2> Manage your Quiz Sets</h2>
        <button> Add a New Quiz Set</button>
        <ul>
            <li>
                <div> QuizSet1 <button>Manage</button> <button>View</button></div>
            </li>
            <li>
                <div> QuizSet2 <button>Manage</button> <button>View</button></div>
            </li>
            <div>
                <!-- After User Clicks on Manage button of quizset1 -->
                <h3> Manage QuizSet1</h3>
                <button>Remove this Set</button>
                <ul>
                    <li>
                        <span>Question</span> <span>Option1</span> <span>Option2</span> <span>Option3</span> <span>Answer</span> 
                    </li>
                    <li> <span>Who is the father of science?</span> <span>Newton</span> <span>Hawkings</span> <span>Boyle</span> <span>Einstine</span> <button>Edit</button> <button>Remove</button></li>
                </ul>
                <!-- After user clicks on Add question or Manage question -->
                <button>Add Question</button>
                <form method='POST' action='handle/addquiz.php' autocomplete='off'> Add new question<br>
                    <input type=text placeholder="Add question" name='question'>
                    <input type=text placeholder="Enter answer" name='answer'>
                    <input type=text  placeholder="Enter Option1" name='opt1'>
                    <input type=text  placeholder="Enter Option2" name='opt2'>
                    <input type=text placeholder="Enter Option3" name='opt3'>
                    <button type=submit name='submit'>Add new</button>
                    <!-- <button type=submit>Add and Exit</button> -->
                </form>
            </div>
            <!-- After user clicks on Add Quizset -->
            <form method='POST' action='addQuizSet.php'>
                Add Quiz Set <br>
                <input type=text name="quizSetName" placeholder="Enter the name for your new quiz set">
                <button type=submit name='submit-set'> Done</button>
            </form>
        </ul>
    </body>

</html>