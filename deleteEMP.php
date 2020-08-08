<?php
require_once './config/connect.php';
//echo '<h1>Prisijungta</h1>';


$id = $_GET['id'];
echo $id;

mysqli_query($connect, "DELETE FROM `darbuotojai`.`employees` WHERE (`ID` = '$id');");
header("location: http://localhost/SPRINT2PHPsenas/?a=darbuotojai");
