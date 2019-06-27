<?php 
include 'handle/afterlog.php';
?>
<!DOCTYPE Html>
<html>
    <head>
        <title> Guffadi</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel=stylesheet href="refrences/fonts/fonts.css ">
        <link rel=stylesheet href='refrences/css/manage_quiz-style.css'>
        <link rel=stylesheet href='refrences/css/header.css'>
        
    </head>
        <script src='refrences/js/open-close.js'>    </script>
        <script src='refrences/js/jquery.js'>    </script>
        <script src="refrences/js/manage_quiz-script.js"></script>
        <script src='refrences/js/add-new-quiz-set.js'></script>
    <body>
        <?php include 'header.php';    ?>
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
                <button class="addQbutt">Add Question</button>
                <button class="removeThisQSbutt">Remove this Set</button>
                <ul>
                    <li>
                        <div><span>Question</span> <span>Option1</span> <span>Option2</span> <span>Option3</span> <span>Answer</span></div> 
                    </li>
                    <li> <div><span>Who is the father of science?</span> <span>Newton</span> <span>Hawkings</span> <span>Boyle</span> <span>Einstine</span></div> <button class="editQbutt">Edit</button> <button class="removeQbutt">Remove</button></li>
                </ul>
            </div>


                <!-- After user clicks on Add Quizset -->
                
            <form id="formAddQS" autocomplete='off' onsubmit='return addquizset()' >
                <div class="close-section fa fa-window-close"></div>
                Add Quiz Set <br>
                <input type=text id="quizSetName" placeholder="Enter the name for your new quiz set">
                <select id="quizFieldName">
                    <option value="Geography">Geography</option>
                    <option value="Science">Science</option>
                    <option value="History">History</option>
                    <option value="Literature">Literature</option>
                    <option value="Mixed">Mixed</option>
                </select>
                <button type=submit id='submit-set' class="doneAddQSbutt" > Done</button>

                <span class="errorMsgForm">
                
                 </span>
</form>
    </body>

</html>