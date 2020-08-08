<?php
require_once '../config/connect.php';
//echo '<h1>Prisijungta</h1>';


$prj_id = $_POST['prj_id'];
//print $prj_id . "<br>";
$proj = $_POST['name'];
//print $proj;


if (isset($proj)) {
    mysqli_query($connect, "UPDATE `darbuotojai`.`projects` 
    SET `Project` = '$proj' WHERE (`ID` = $prj_id)");
    //header("location: http://localhost/SPRINT2PHPsenas/?a=projektai");
}
