<?php
include 'connect_db.php';
include 'function.php';

if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $meno_filmu = check($_POST['meno_filmu']);
    $zaner = check($_POST['zaner']);
    $dlzka = check($_POST['dlzka']);
    $krajina = check($_POST['krajina']);

    $user_data ='meno_filmu='.$meno_filmu.'&zaner='.$zaner.'&dlzka='.$dlzka.'&krajina='.$krajina;

    if (empty($meno_filmu)) {
        header("Location:../index.php?err=Enter Nazov filmu&$user_data");
    }else if (empty($zaner)) {
        header("Location:../index.php?err=Enter Zaner&$user_data");
    }else if (empty($dlzka)) {
        header("Location:../index.php?err=Enter Dlzka&$user_data");
    }else if (empty($krajina)) {
        header("Location:../index.php?err=Enter Krajina&$user_data");
    }else{
        $sql ="INSERT INTO filmy(názov_filmu, žáner, dĺžka, krajina) VALUE('$meno_filmu','$zaner','$dlzka','$krajina')";

        $result = mysqli_query($con, $sql);

        if ($result) {
            header("Location:../view.php?succ=Add Film");
        }else{
            header("Location:../view.php?err=Film is not saved!!!");
        }

        
        
    }



}

?>