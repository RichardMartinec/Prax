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
        header("Location:../index.php?err=Vlož Nazov filmu&$user_data");
    }else if (empty($zaner)) {
        header("Location:../index.php?err=Vlož Zaner&$user_data");
    }else if (empty($dlzka)) {
        header("Location:../index.php?err=Vlož Dlzka&$user_data");
    }else if (empty($krajina)) {
        header("Location:../index.php?err=Vlož Krajina&$user_data");
    }else{
        $sql ="INSERT INTO filmy(názov_filmu, žáner, dĺžka, krajina) VALUE('$meno_filmu','$zaner','$dlzka','$krajina')";
        $result = mysqli_query($con, $sql);

        $sql = "SELECT * FROM filmy";
        $result = mysqli_query($con, $sql);
        
        $nove_poradie = 1;
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id_film'];
            /*echo $id;*/
            $sql_poradie = "UPDATE filmy SET poradie='$nove_poradie' WHERE id_film = '$id'";
            
            $result_poradie = mysqli_query($con, $sql_poradie);
            $nove_poradie +=1;
        }

        if ($result_poradie) {
            header("Location:../view.php?succ=Pridanie Film");
        }else{
            header("Location:../view.php?err=Film is not saved!!!");
        }

        
        
    }



}

?>