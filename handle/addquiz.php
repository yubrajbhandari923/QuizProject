<?php
include 'connect-quiz-ques.php';
session_start();
if(isset($_POST['submit_check'])){
if(isset($_POST['question']) && !empty($_POST['question'])){
    $question=mysqli_real_escape_string($sql_connect,$_POST['question']);
}else{
    echo 'Please fill all details';
    exit();
}
if(isset($_POST['answer'])&&!empty($_POST['answer'])){
    $answer=mysqli_real_escape_string($sql_connect,$_POST['answer']);
}else{
    echo 'Please fill all details';
    exit();
}
if(isset($_POST['opt1'])&&!empty($_POST['opt1'])){
    $opt1=mysqli_real_escape_string($sql_connect,$_POST['opt1']);
}else{
    echo 'Please fill all details';
    exit();
}
if(isset($_POST['opt2'])&&!empty($_POST['opt2'])){
    $opt2=mysqli_real_escape_string($sql_connect,$_POST['opt2']);
}else{
    echo 'Please fill all details';
    exit();
}
if(isset($_POST['opt3'])&& !empty($_POST['opt3'])){
    $opt3=mysqli_real_escape_string($sql_connect,$_POST['opt3']);
}else{
    echo 'Please fill all details';
    exit();
}
if(isset($_SESSION['current_setname'])&&!empty($_SESSION['current_setname'])){
    $current_setname=$_SESSION['current_setname'];
}else{
    echo 'Sorry! There was an error';
    exit();
}
if(isset($_SESSION['current_field'])&&!empty($_SESSION['current_field'])){
    $current_field=$_SESSION['current_field'];
}else{
    echo 'Sorry! There was an error';
    exit();
}
   if(strnatcasecmp($opt1,$opt2)==0 ||strnatcasecmp($opt1,$opt3)==0 || strnatcasecmp($opt2,$opt3)==0){
        echo 'Options cannot be sames';
        exit();
    }
    if(strnatcasecmp($answer,$opt1)==0 || strnatcasecmp($answer,$opt2)==0 || strnatcasecmp($answer,$opt3)==0){
        //Ntg to do
    }else{
        echo 'One of your option should match with answer';
        exit();
    }
    $userid=$_COOKIE['userid'];
    $insert_data="INSERT INTO quiz(id,question,answer,opt1,opt2,opt3,field,setname)VALUES('$userid','$question','$answer','$opt1','$opt2','$opt3','$current_field','$current_setname')";
    $insert_data_admin="INSERT INTO all_question_admin(question,answer,opt1,opt2,opt3,field)VALUES('$question','$answer','$opt1','$opt2','$opt3','$current_field')";
    mysqli_query($sql_connect,$insert_data);
    mysqli_query($sql_connect,$insert_data_admin);
    echo 'Success';
    session_destroy();
    exit();
}else{
    header('location:../manage_quiz');
}
?>