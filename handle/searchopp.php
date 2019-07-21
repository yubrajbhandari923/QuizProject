<?php
include '../crypt.php';
include 'sql-connection.php';
    $user_query=$_GET['text'];
    $select_name='SELECT * FROM account';
    $query_select_name=mysqli_query($sql_connect,$select_name);
    $current_user_encrypt=$_COOKIE['hafhk43'];
    $c = new McryptCipher('passKey');
$current_user= $c->decrypt($current_user_encrypt);
    while($row=mysqli_fetch_assoc($query_select_name)){
        $compare_str=strncasecmp($user_query,$row['name'],strlen($user_query));
        if($compare_str==0){
        $user_profile_status=$row['pic_status'];
        $user_letter=$row['name'][0];
        $location_pic=$row['pic_dir'];
          if($row['id']==$current_user){
              if($user_profile_status==0){
                echo "<div class='a-result'>
                                    <div class='opponent-userpic opp-found'>".$user_letter."</div>
                                    <span id='result-search'>".$row['name'] ."</span>
                                    <div class='butt view-profile-opponent'> View Profile</div>
                                </div> ";
              }else{
                echo "<div class='a-result'>
                <div class='opponent-userpic'><img src='".$location_pic."'></div>
                <span id='result-search'>".$row['name'] ."</span>
                <div class='butt view-profile-opponent'> View Profile</div>
            </div> ";

              }
          }else{
            if($user_profile_status=='text'){
              echo "<div class='a-result'>
                                    <div class='opponent-userpic opp-found'>".$user_letter."</div>
                                    <span id='result-search'>".$row['name'] ."</span>
                                    <div class='butt challenge-opponent'> Challenge</div>
                                    <div class='butt view-profile-opponent'> View Profile</div>
                                </div> ";
            }else{
              echo "<div class='a-result'>
                <div class='opponent-userpic'><img src='".$location_pic."'></div>
                <span id='result-search'>".$row['name'] ."</span>
                <div class='butt challenge-opponent'> Challenge</div>
                <div class='butt view-profile-opponent'> View Profile</div>
            </div> ";
            }
          }
    }
    }
?>