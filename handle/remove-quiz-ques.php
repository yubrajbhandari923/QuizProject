<?php
    include 'connect-quiz-ques.php';
    include 'session-cookie_check.php';
    $location='location:../manage_quizset.php?set='.$_GET['set'];
    if(isset($_GET['quiz-id'])){
        $id_of_quiz=mysqli_real_escape_string($sql_connect,$_GET['quiz-id']);
        $set_name=mysqli_real_escape_string($sql_connect,$_GET['set']);
    }else{
        header($location);
        exit();
    }
    $current_id=$_COOKIE['userid'];
    $delete_query="DELETE FROM quiz WHERE id='$current_id' AND id_of_quiz='$id_of_quiz' AND setname='$set_name' ";
    $select_query="SELECT * FROM quiz WHERE id='$current_id' AND id_of_quiz='$id_of_quiz' AND setname='$set_name'";
    $query_select_question=mysqli_query($sql_connect,$select_query);
    $row_check=mysqli_num_rows($query_select_question);
    if($row_check===0){
        //Sorry there was an error
    }else{
        mysqli_query($sql_connect,$delete_query);
        header($location);
    }
?>