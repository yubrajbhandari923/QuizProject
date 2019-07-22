<?php
    define('check',TRUE);
    if(!isset($_SERVER['HTTP_REFERER'])){
        include '../error.php';
        exit;
    }
    include '../crypt.php';
    include 'sql-connection.php';
    include 'session-cookie_check.php';
    $currentid_encrypt=$_COOKIE['hafhk43'];
 $c = new McryptCipher('passKey');
 $currentid= $c->decrypt($currentid_encrypt);
    if(isset($_POST['upload_submit'])){
        $filename=$_FILES['profile_pic']['name'];
        $temp_dir=$_FILES['profile_pic']['tmp_name'];
        $fileerror=$_FILES['profile_pic']['error'];
        $filetype=$_FILES['profile_pic']['type'];
        $filesize=$_FILES['profile_pic']['size'];

        //Now getting file name and extension
        $file_ext=explode('.',$filename);
        $actual_file_ext=end($file_ext);
        $file_name_only=$file_ext[0];
        $allowed=['png','jpeg','jpg','JPG','PNG','JPEG'];

        if($filename==""){
            $_SESSION['upload']="Please select a file";
            // header('location:../my_account');
            exit();
        }else{
            if($fileerror===0){
                    if(in_array($actual_file_ext,$allowed)){
                            if($filesize<5000000){
                                $newfilename=uniqid('',true).'.'.$actual_file_ext;
                                $file_destination="../uploads/profile_pic/".$newfilename;
                                $file_destination_db="uploads/profile_pic/".$newfilename;
                                move_uploaded_file($temp_dir,$file_destination);
                                $select_img_dir_old="SELECT * FROM account WHERE id='$currentid' ";
                                $select_img_dir_old_query=mysqli_query($sql_connect,$select_img_dir_old);
                                $fetch_dir=mysqli_fetch_assoc($select_img_dir_old_query);
                                $old_dir_image=$fetch_dir['pic_dir'];
                                $old='../'.$old_dir_image;
                                unlink($old);
                                $insert_data="UPDATE account SET pic_status=1 , pic_dir='$file_destination_db' where id='$currentid' ";
                                mysqli_query($sql_connect,$insert_data);
                                $cookie_time=time()+60*60*60*24;
                                $profile_pic_encrypt="<img src='".$file_destination_db."'>";                           
                                $c = new McryptCipher('passKey');
                                $profile_pic = $c->encrypt($profile_pic_encrypt);
                                setcookie('nbie09',$profile_pic,$cookie_time,'/');
                                // header('location:../my_account');
                                exit();
                            }else{
                                $_SESSION['upload']="File is too big";
                                // header('location:../my_account');
                                exit();
                            }
                    }else{
                        $_SESSION['upload']="File type not allowed";
                        // header('location:../my_account');
                        exit();
                    }
            }else{
                $_SESSION['upload']="There was an error";
                // header('location:../my_account');
                exit();
            }
        }
    }else{
        // header('location:../my_account');
        exit();
    }
?>