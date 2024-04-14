<?php
include 'connect_db.php';
include 'function.php';

if (isset($_GET['filter_html']) && isset($_GET['krajina_filtrovanie'])) {
    $filter_polozka = check($_GET['krajina_filtrovanie']);
    /*$filter_polozka = ($_GET['filter_html']);*/
    /*print $filter_polozka;*/
    /*print_r($_GET);*/
    /*echo $filter_polozka;*/
    $sql = "SELECT * FROM filmy WHERE krajina = '$filter_polozka'";
    $result = mysqli_query($con, $sql);
       
}
if (isset($_GET['filter_html']) && isset($_GET['zaner_filtrovanie'])){
    $filter_polozka = check($_GET['zaner_filtrovanie']);
    /*$filter_polozka = ($_GET['filter_html']);*/
    /*echo $filter_polozka;*/
    
    $sql = "SELECT * FROM filmy WHERE žáner = '$filter_polozka'";
    $result = mysqli_query($con, $sql);
       
}
if (isset($_GET['filter_html']) && isset($_GET['dlzka_filtrovanie'])){
    $filter_polozka = check($_GET['dlzka_filtrovanie']);
    /*$filter_polozka = ($_GET['filter_html']);*/
    /*echo $filter_polozka;*/

    $sql = "SELECT * FROM filmy WHERE dĺžka = '$filter_polozka'";
    $result = mysqli_query($con, $sql);
       
}


?>