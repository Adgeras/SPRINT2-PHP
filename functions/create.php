<?php
require_once '../config/connect.php';
echo '<h1>Prisijungta</h1>';

$name = $_POST['name'];

mysqli_query($connect, "INSERT INTO `darbuotojai`.`ddarbuotojai` (`Darbuotojo_Vardas`) VALUES ('name')");


?>