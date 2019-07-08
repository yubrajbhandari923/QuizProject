<?php
include 'handle/sql-connection.php';
session_start();
if(empty($_POST['username1'])){
    $_SESSION['error1']='Enter your email or username';
    header('location:login');
    exit();
}else{
    $user=mysqli_real_escape_string($sql_connect,$_POST['username1']);
}
if(empty($_POST['password1'])){
    $_SESSION['error1']='Enter your password';
    header('location:login');
    exit();
}else{
    $pass=mysqli_real_escape_string($sql_connect,$_POST['password1']);
}
$login_q1="SELECT * FROM account WHERE username='$user' AND password='$pass'";
$login_q2="SELECT * FROM account WHERE email='$user' AND password='$pass'";
$query_login1=mysqli_query($sql_connect,$login_q1);
$query_login2=mysqli_query($sql_connect,$login_q2);
$rows1=mysqli_num_rows($query_login1);
$rows2=mysqli_num_rows($query_login2);
if($rows1===1){
    $get_id=mysqli_fetch_assoc($query_login1);

}else{
    $get_id=mysqli_fetch_assoc($query_login2);
}
$user_id=$get_id['id'];
$user_letter=$get_id['name'];
$user_pic_status=$get_id['pic_status'];
$cookie_time=time()+60*60*60*24;
setcookie('userid',$user_id,$cookie_time,'/');
$_SESSION['id']=$user_id;

if($rows1==1||$rows2==1){
    if($user_pic_status==0){
    setcookie('userpic',strtoupper($user_letter[0]),$cookie_time,'/');
    }else{
        setcookie('userpic',"<img src='".$get_id['pic_dir']."'>",$cookie_time,'/');
    }
    header('location:home');
    exit();
}else{
    $_SESSION['error1']='Incorrect username or Password';
    header('location:login');
    exit();
}


?>