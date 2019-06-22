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
        <script src='refrences/js/open-close.js'>    </script>
        <script src="refrences/js/manage_quiz-script.js"></script>

    </head>
    <body>
        <?php 
        include 'header.php'; 
        ?>
        <div id="cover"></div>
        <div class="Main-container">
            <h2 class="headtext"> Manage your Quiz Sets</h2>
            <button id="addQuizSetButt" class="addQuizSetButt"> Add a New Quiz Set</button>
            <ul>
            <?php include 'handle/display-set.php'; ?>
            </ul>
        </div>

            <!-- After User Clicks on Manage button of quizset1 -->
            <div id="manageQS-contain"> 
                <h3 class="headtext"> Manage QuizSet1</h3>
                <button class="removeThisQSbutt">Remove this Set</button>
                <ul>
                    <li>
                        <div><span>Question</span> <span>Option1</span> <span>Option2</span> <span>Option3</span> <span>Answer</span></div> 
                    </li>
                    <li> <div><span>Who is the father of science?</span> <span>Newton</span> <span>Hawkings</span> <span>Boyle</span> <span>Einstine</span></div> <button class="editQbutt">Edit</button> <button class="removeQbutt">Remove</button></li>
                </ul>
                <button class="addQbutt">Add Question</button>
            </div>


                <!-- After user clicks on Add Quizset -->
                
            <form id="formAddQS" method='POST' action='handle/addQuizSet.php' autocomplete='off'>
                <div class="close-section fa fa-window-close"></div>
                Add Quiz Set <br>
                <input type=text name="quizSetName" placeholder="Enter the name for your new quiz set">
                <select name="quizFieldName">
                    <option value="Geography">Geography</option>
                    <option value="Science">Science</option>
                    <option value="History">History</option>
                    <option value="Literature">Literature</option>
                    <option value="Mixed">Mixed</option>
                </select>
                <button type=submit name='submit-set' class="doneAddQSbutt"> Done</button>

                <span class="errorMsgForm"> </span>
            </form>
            <!-- After user clicks on Add question or Manage question -->
            <form id="formAddQ" method= 'POST' action='handle/addquiz.php' autocomplete='off'> 
                    <div class="close-section fa fa-window-close"></div>
                    Add new question<br>
                    <input type=text placeholder="Add question" name='question'>
                    <input type=text placeholder="Enter answer" name='answer'>
                    <input type=text  placeholder="Enter Option1" name='opt1'>
                    <input type=text  placeholder="Enter Option2" name='opt2'>
                    <input type=text placeholder="Enter Option3" name='opt3'>
                    <button type=submit name='submit' class="addQsubmitButt">Add new</button>
                    <!-- <button type=submit>Add and Exit</button> -->
                </form>
    </body>

</html>