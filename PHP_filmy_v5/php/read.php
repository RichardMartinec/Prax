<?php
include 'connect_db.php';

$sql = "SELECT * FROM filmy";

$result = mysqli_query($con, $sql);
?>