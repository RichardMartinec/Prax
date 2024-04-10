<?php
include 'connect_db.php';
include 'function.php';

if (isset($_GET['id'])){
    $id = check($_GET['id']);

    $sql = "SELECT * FROM filmy WHERE id_film = $id";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else{ 
        header("Location:../view.php");
    }
}

if (isset($_POST['update_film'])) {

    $id = check($_POST['id']);
    $meno_filmu = check($_POST['meno_filmu']);
    $zaner = check($_POST['zaner']);
    $dlzka = check($_POST['dlzka']);
    $krajina = check($_POST['krajina']);

    if (empty($meno_filmu)) {
        header("Location:../update.php?err=Enter full name is require");
    }else if (empty($zaner)) {
        header("Location:../update.php?err=Zaner is require");
    }else if (empty($dlzka)) {
        header("Location:../update.php?err=Dlzka is require");
    }else if (empty($krajina)) {
        header("Location:../update.php?err=Krajina is require");
    }else{

        $sql_update = "UPDATE filmy SET názov_filmu = '$meno_filmu', žáner = '$zaner', dĺžka = '$dlzka', krajina = '$krajina' WHERE id_film = '$id'";

        $result = mysqli_query($con, $sql_update);

        if($result){
            header("Location:../view.php?succ=Update film");
        }else{
            header("Location:../view.php?err=Unknown error");
        }

    }

}








?>