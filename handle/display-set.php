<?php
    include 'connect-quiz-ques.php';
    $currentuser=$_COOKIE['userid'];
    $select_table="SELECT * FROM sets WHERE id='$currentuser'";
    $query_table_set=mysqli_query($sql_connect,$select_table);
    while($row=mysqli_fetch_assoc($query_table_set)){
      echo "<li>
                    <div>".$row['setname']." :::: ".$row['field']."
                    <a href='manage_quizset.php?set=".$row['setname']."'><button id='manageQSbutt' class='manageQSbutt'>Manage</button></a>
                     <button class='addQbutt'>Add Question</button>
                      <a href='handle/remove-set.php?set=".$row['setname']."'><button class='removeThisQSbutt'>Remove this Set</button></a>
                    </div>
                </li>
                ";
    }

?>