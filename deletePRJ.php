<?php
require_once './config/connect.php';
///echo '<h1>Prisijungta</h1>';


$prj_id = $_GET['id'];
echo $id;

mysqli_query($connect, "DELETE FROM `darbuotojai`.`Projects` WHERE (`ID` = '$prj_id');");
header("location: http://localhost/SPRINT2PHP/?a=projektai");
