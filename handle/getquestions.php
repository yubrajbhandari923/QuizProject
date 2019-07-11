<?php
include 'sql-connection.php';
    $field=$_GET['field'];
    $no_of_ques=$_GET['no'];
    $level=$_GET['level'];
    $select_ques="SELECT * FROM all_question_admin ";
    $select_ques_query=mysqli_query($sql_connect,$select_ques);
    $num_rows=mysqli_num_rows($select_ques_query);
    $stock[]='';
    $data_store[]='';
    for($i=1;$i<=$no_of_ques;$i++){
        check:
        $randa= rand(1,$num_rows);
        if(in_array($randa,$stock)){
            goto check ;
        }
        array_push($stock,$randa);
        $select_data="SELECT * FROM all_question_admin WHERE sn='$randa'";
        $select_data_query=mysqli_query($sql_connect,$select_data);
        $fetch_data=mysqli_fetch_assoc($select_data_query);
        $temp_hold=array($fetch_data['question'],$fetch_data['answer'],$fetch_data['opt1'],$fetch_data['opt2'],$fetch_data['opt3']);
        array_push($data_store,$temp_hold);
    }
    $jsoncode=json_encode($data_store);
    echo $jsoncode;
?>