<?php
    include 'connect-quiz-ques.php';
    session_start();
    $currentuser=$_COOKIE['userid'];
    $select_table="SELECT * FROM sets WHERE id='$currentuser'";
    $query_table_set=mysqli_query($sql_connect,$select_table);
    if(isset($_POST['submit-set'])){
        if(isset($_POST['quizSetName']) && !empty($_POST['quizSetName'])){
            $set_name=$_POST['quizSetName'];
        }else{
            $_SESSION['error_quiz_set']='Please enter a quiz set';
            // header('location:../manage_quiz.php');
            echo $_SESSION['error_quiz_set'];
            exit();
        }
        if(isset($_POST['quizFieldName']) && !empty($_POST['quizFieldName'])){
            $set_field=$_POST['quizFieldName'];
        }else{
            $_SESSION['error_quiz_set']='Please select a quiz field';
            // header('location:../manage_quiz.php');
            echo $_SESSION['error_quiz_set'];
            exit();
        }
        $same_set_check="SELECT * FROM sets WHERE id='$currentuser' AND setname='$set_name'";
        $same_set_check_query=mysqli_query($sql_connect,$same_set_check);
        $check_set=mysqli_num_rows($same_set_check_query);
        if($check_set!==0){
            $_SESSION['error_quiz_set']='This set name is already taken';
            // header('location:../manage_quiz.php');
            echo $_SESSION['error_quiz_set'];
            exit();
        }
        $insert_set="INSERT INTO sets(id,setname,field)VALUES('$currentuser','$set_name','$set_field')";
        mysqli_query($sql_connect,$insert_set);
        header('location:../manage_quiz.php');
        // echo 'SUccess';
    }
?>