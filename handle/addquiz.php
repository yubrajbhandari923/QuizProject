<?php
include 'connect-quiz-ques.php';
session_start();
if(isset($_POST['submit'])){
if(isset($_POST['question']) && !empty($_POST['question'])){
    $question=mysqli_real_escape_string($sql_connect,$_POST['question']);
}else{
    $_SESSION['error_add_quiz']='Please fill all details';
    header('location:../manage_quiz.php');
    exit();
}
if(isset($_POST['answer'])&&!empty($_POST['answer'])){
    $question=mysqli_real_escape_string($sql_connect,$_POST['answer']);
}else{
    $_SESSION['error_add_quiz']='Please fill all details';
        header('location:../manage_quiz.php');
    exit();
}
if(isset($_POST['opt1'])&&!empty($_POST['opt1'])){
    $question=mysqli_real_escape_string($sql_connect,$_POST['opt1']);
}else{
    $_SESSION['error_add_quiz']='Please fill all details';
        header('location:../manage_quiz.php');
    exit();
}
if(isset($_POST['opt2'])&&!empty($_POST['opt2'])){
    $question=mysqli_real_escape_string($sql_connect,$_POST['opt2']);
}else{
    $_SESSION['error_add_quiz']='Please fill all details';
        header('location:../manage_quiz.php');
    exit();
}
if(isset($_POST['opt3'])&& !empty($_POST['opt3'])){
    $question=mysqli_real_escape_string($sql_connect,$_POST['opt3']);
}else{
    $_SESSION['error_add_quiz']='Please fill all details';
        header('location:../manage_quiz.php');
    exit();
}
// if(isset($_POST['field'])&&!empty($_POST['field'])){
//     $question=mysqli_real_escape_string($sql_connect,$_POST['field']);
// }else{
//     $_SESSION['error_add_quiz']='Please fill all details';
//         // header('location:../manage_quiz.php');
//     exit();
// }
// if(isset($_POST['set-name'])&&!empty($_POST['set-name'])){
//     $question=mysqli_real_escape_string($sql_connect,$_POST['set-name']);
// }else{
//     $_SESSION['error_add_quiz']='Please fill all details';
//         // header('location:../manage_quiz.php');
//     exit();
// }
}else{
    header('location:../manage_quiz.php');
}
?>