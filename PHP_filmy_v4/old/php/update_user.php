<?php
include 'connect_db.php';
include 'function.php';

if (isset($_GET['id'])){
    $id = check($_GET['id']);

    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else{ 
        header("Location:../view.php");
    }
}

if (isset($_POST['update_uzivatel'])) {

    $id = check($_POST['id']);
    $full_name = check($_POST['full_name']);
    $email = check($_POST['email']);

    if (empty($full_name)) {
        header("Location:../update.php?err=Enter full name is require");
    }else if (empty($email)) {
        header("Location:../update.php?err=Email is require");
    }else{

        $sql_update = "UPDATE users SET full_name_db = '$full_name', email_db = '$email' WHERE id = '$id'";

        $result = mysqli_query($con, $sql_update);

        if($result){
            header("Location:../view.php?succ=Update user");
        }else{
            header("Location:../view.php?err=Unknown error");
        }

    }

}








?>