<?php
    include 'connect-quiz-ques.php';
    session_start();
    if(isset($_POST['submit-set'])){
        if(isset($_POST['quizSetName']) && !empty($_POST['quizSetName'])){
            $
        }else{
            $_SESSION['error_quiz_set']='Please enter a quiz set';
            header('location:../manage_quiz.php');
        }
    }
?>