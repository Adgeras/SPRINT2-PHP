<?php
require_once '../config/connect.php';
echo '<h1>Prisijungta</h1>';


$name = $_POST['name'];
$project = $_POST['projectName'];

if (isset($name)) {
    mysqli_query($connect, "INSERT INTO `darbuotojai`.`employees` (`Name`) VALUES ('$name')");
    header("location: http://localhost/SPRINT2PHPsenas/?a=darbuotojai");
} else {
    mysqli_query($connect, "INSERT INTO `darbuotojai`.`projects` (`Project`) VALUES ('$project')");
    header("location: http://localhost/SPRINT2PHPsenas/?a=projektai");
}
