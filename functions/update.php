<?php
require_once '../config/connect.php';
echo '<h1>Prisijungta</h1>';


$id = $_POST['id'];
print $id . "<br>";
$name = $_POST['name'];
print $name;


if (isset($name)) {
    mysqli_query($connect, "UPDATE `darbuotojai`.`employees` 
    SET `Name` = '$name' WHERE (`ID` = $id)");
    header("location: http://localhost/SPRINT2PHPsenas/?a=darbuotojai");
} else {
    mysqli_query($connect, "INSERT INTO `darbuotojai`.`projects` (`Project`) VALUES ('$project')");
    header("location: http://localhost/SPRINT2PHPsenas/?a=projektai");
}
