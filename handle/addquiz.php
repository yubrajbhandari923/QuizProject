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
    $answer=mysqli_real_escape_string($sql_connect,$_POST['answer']);
}else{
    $_SESSION['error_add_quiz']='Please fill all details';
        header('location:../manage_quiz.php');
    exit();
}
if(isset($_POST['opt1'])&&!empty($_POST['opt1'])){
    $opt1=mysqli_real_escape_string($sql_connect,$_POST['opt1']);
}else{
    $_SESSION['error_add_quiz']='Please fill all details';
        header('location:../manage_quiz.php');
    exit();
}
if(isset($_POST['opt2'])&&!empty($_POST['opt2'])){
    $opt2=mysqli_real_escape_string($sql_connect,$_POST['opt2']);
}else{
    $_SESSION['error_add_quiz']='Please fill all details';
        header('location:../manage_quiz.php');
    exit();
}
if(isset($_POST['opt3'])&& !empty($_POST['opt3'])){
    $opt3=mysqli_real_escape_string($sql_connect,$_POST['opt3']);
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
    if(strnatcasecmp($opt1,$opt2)==0 ||strnatcasecmp($opt1,$opt3)==0 || strnatcasecmp($opt2,$opt3)==0){
        $_SESSION['error_add_quiz']='Options cannot be same';
        header('location:../manage_quiz.php');
        exit();
    }
    if(strnatcasecmp($answer,$opt1)==0 || strnatcasecmp($answer,$opt2)==0 || strnatcasecmp($answer,$opt3)==0){
        //Ntg to do
    }else{
        $_SESSION['error_add_quiz']='One of your option should match with answer';
        header('location:../manage_quiz.php');
        exit();
    }
    unset($_SESSION['error_add_quiz']);
    $userid=$_COOKIE['userid'];
    $insert_data="INSERT INTO quiz(id,question,answer,opt1,opt2,opt3)VALUES('$userid','$question','$answer','$opt1','$opt2','$opt3')";
    mysqli_query($sql_connect,$insert_data);    
}else{
    header('location:../manage_quiz.php');
}
?>