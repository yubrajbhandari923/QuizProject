<?php
//Run this page and your database and table will be ready
$sql_connect=mysqli_connect('localhost','root');
$new_db='CREATE DATABASE user_record';
mysqli_query($sql_connect,$new_db);
// mysqli_select_db($sql_connect,'user_record');
$newtable="CREATE TABLE `user_record`.`account`(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name TEXT NOT NULL,
    username TEXT NOT NULL,
    email TEXT NOT NULL,
    password TEXT NOT NULL,
    pic_status INT NOT NULL DEFAULT '0',
    pic_dir TEXT NOT NULL,
    name_change INT NOT NULL DEFAULT '0'
    )";
    mysqli_query($sql_connect,$newtable);
    $table_points="CREATE TABLE `user_record`.`user_rank`(
        id INT PRIMARY KEY,
        rank INT NOT NULL DEFAULT '0',
        points INT NOT NULL DEFAULT '0'
    )";
    mysqli_query($sql_connect,$table_points);
    $quiz_table="CREATE TABLE `user_record`.`quiz` (
                 `id` INT ,
                 `id_of_quiz` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                `question` TEXT NOT NULL ,
                 `answer` TEXT NOT NULL ,
                  `opt1` TEXT NOT NULL ,
                   `opt2` TEXT NOT NULL ,
                    `opt3` TEXT NOT NULL ,
                     `field` TEXT NOT NULL,
                     `setname` TEXT NOT NULL )";
    mysqli_query($sql_connect,$quiz_table);
    $set_table='CREATE TABLE `user_record`.`sets`(
        id INT,
        setname TEXT NOT NULL,
        field TEXT NOT NULL
    )';
    mysqli_query($sql_connect,$set_table);
    $create_table_adminquiz="CREATE TABLE `user_record`.`all_question_admin` ( 
        `sn` INT NOT NULL AUTO_INCREMENT ,
         `question` TEXT NOT NULL ,
          `answer` TEXT NOT NULL ,
           `opt1` TEXT NOT NULL ,
            `opt2` TEXT NOT NULL ,
             `opt3` TEXT NOT NULL , 
             `field` TEXT NOT NULL ,
              PRIMARY KEY (`sn`)
              )";
              mysqli_query($sql_connect,$create_table_adminquiz);
    echo "done";
    ?>