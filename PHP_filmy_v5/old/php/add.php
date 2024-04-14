<?php
include 'connect_db.php';
include 'function.php';

if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $full_name = check($_POST['full_name']);
    $email = check($_POST['email']);

    $user_data ='full_name='.$full_name.'&email='.$email;

    if (empty($full_name)) {
        header("Location:../index.php?err=Enter Full Name&$user_data");
    }else if (empty($email)) {
        header("Location:../index.php?err=Enter Email&$user_data");
    }else{
        $sql ="INSERT INTO users(full_name_db, email_db) VALUE('$full_name','$email')";

        $result = mysqli_query($con, $sql);

        if ($result) {
            header("Location:../view.php?succ=Add User");
        }else{
            header("Location:../view.php?err=User is not save!!!");
        }

        
        
    }



}

?>