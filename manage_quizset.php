<?php
    include 'handle/managequizset.php';
?>
<!DOCTYPE Html>
<html>
    <head>
        <title> Guffadi</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel=stylesheet href="refrences/fonts/fonts.css ">
        <link rel=stylesheet href='refrences/css/manage_quizset-style.css'>
        <link rel=stylesheet href='refrences/css/header.css'>
        
    </head>
        <script src='refrences/js/open-close.js'>    </script>
        <script src='refrences/js/jquery.js'>    </script>
        <script src="refrences/js/manage_quizset-script.js"></script>
        <script src="refrences/js/add-question.js"></script>
    <body>
            <div id="cover"></div>
<div id="manageQS-contain"> 
        <h3 class="headtext"> Manage QuizSet</h3>
        <h2 class="headtext"> <?php echo $data_set['setname'].'/  '.$data_set['field'];?></h2>
        <button class="addQbutt">Add Question</button>
        <a href='handle/remove-set.php?set=<?php echo $data_set['setname'];?>'><button class="removeThisQSbutt">Remove this Set</button></a>
        <?php
        include 'handle/viewquestions.php';
        ?>
    </div>
     <!-- After user clicks on Add question or Manage question -->
     <form id="formAddQ" autocomplete='off' onsubmit='return addquizquestion()'> 
            <div class="close-section fa fa-window-close"></div>
            Add new question<br>
            <input type=text placeholder="Add question" id='question'>
            <input type=text placeholder="Enter answer" id='answer'>
            <input type=text  placeholder="Enter Option1" id='opt1'>
            <input type=text  placeholder="Enter Option2" id='opt2'>
            <input type=text placeholder="Enter Option3" id='opt3'>
            <button type=submit id='submit_question' class="addQsubmitButt">Add new</button>
            <span class='errorMsgForm'> </span>
        </form>
</body>
</html>