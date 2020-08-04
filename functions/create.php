<?php
require_once '../config/connect.php';
echo '<h1>Prisijungta</h1>';


$name = $_POST['name'];
$project = $_POST['projectName'];

if (isset($name)){
    mysqli_query($connect, "INSERT INTO `darbuotojai`.`ddarbuotojai` (`Darbuotojo_Vardas`) VALUES ('$name')");
    header("location: ../employee_tbl.php");
} else {mysqli_query($connect, "INSERT INTO `darbuotojai`.`projektai` (`Projektai`) VALUES ('$project')");
        header("location: ../project_tbl.php");
}
?>