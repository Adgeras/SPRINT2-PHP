<?php
$oldNameID = $_POST['oldid'];
if (isset($oldNameID)) {
    print_r($oldNameID);
    require_once '../config/connect.php';
    echo '<h1>Prisijungta</h1>';

    $NEWname = $_POST['NEWname'];
    echo ($NEWname) . "<br>";

    //print_r($name);
    $project = $_POST['projectName'];

    if (isset($NEWname)) {
        mysqli_query($connect, "UPDATE `darbuotojai`.`ddarbuotojai` SET `Darbuotojo_Vardas` = $NEWname WHERE (`ID` = $oldNameID)");
        echo "veikia sita saka";
        //header("location: http://localhost/SPRINT2PHP/?a=darbuotojai");
    } else {
        mysqli_query($connect, "INSERT INTO `darbuotojai`.`projektai` (`Projektai`) VALUES ('$project')");
        //header("location: http://localhost/SPRINT2PHP/?a=projektai");
    } 
}
