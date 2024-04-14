<?php
include 'function.php';
include 'connect_db.php';

if (isset($_GET['id'])) {
    $id = check($_GET['id']);
    $sql = "DELETE FROM filmy WHERE id_film = $id";

    $result = mysqli_query($con, $sql);
/*
    if ($result) {
        header("Location:../view.php?succ=Delete filmy");
    }else{
        header("Location:../view.php");
    }
*/
}

$sql = "SELECT * FROM filmy";
$result = mysqli_query($con, $sql);


$nove_poradie = 1;
while($row = mysqli_fetch_assoc($result)){
    $id = $row['id_film'];
    $sql_poradie = "UPDATE filmy SET poradie='$nove_poradie' WHERE id_film = '$id'";
    
    $result_poradie = mysqli_query($con, $sql_poradie);
    $nove_poradie +=1;
    
}
      

    if ($result_poradie) {
        header("Location:../view.php?succ=Delete filmy");
    }else{
        header("Location:../view.php");
    }
    


/*-$sql = "SELECT * FROM filmy";
$result = mysqli_query($con, $sql);*/





?>