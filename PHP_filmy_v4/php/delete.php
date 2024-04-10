<?php
include 'function.php';
include 'connect_db.php';

if (isset($_GET['id'])) {
    $id = check($_GET['id']);
    $sql = "DELETE FROM filmy WHERE id_film = $id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location:../view.php?succ=Delete filmy");
    }else{
        header("Location:../view.php");
    }

}







?>