<?php
require_once '../config/connect.php';
//echo '<h1>Prisijungta</h1>';

print_r($_POST);

$id = $_POST['id'];
//print $id . "<br>";
$name = $_POST['project'];
//print $name;

if (empty($name)) {
    $name = '';
}
//echo $name;
//exit;
if (isset($name)) {
    mysqli_query($connect, "UPDATE `darbuotojai`.`employees` 
    SET `pro_ID` = '$name' WHERE (`ID` = $id)");
    header("location: http://localhost/SPRINT2PHP/?a=darbuotojai");
}
