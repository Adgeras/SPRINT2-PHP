<?php
require_once './config/connect.php';
require_once './functions/functions.php';

$projektas = $_GET['a'];
$id = $_GET['id'];
$item_to_update = mysqli_query($connect, "SELECT * FROM darbuotojai.employees
                                            where ID = '$id';");
$empl = mysqli_fetch_assoc($item_to_update);
//print_r($empl);

//************  JUNGIUOSI PRIE PROJEKTU: */

$projects = (mysqli_query($connect, "SELECT * FROM darbuotojai.projects"));
$project = mysqli_fetch_all($projects);
// foreach ($project as $proj) {
//     printink($proj);
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>

<body>
    <div class="container center_div">
        <h3>Assign project to employee: <strong style="color: black; text-decoration: underline;"><?= $empl['Name'] ?> </strong></h3>
        <form action="./functions/assign_proj.php" method="post">
            <input type="hidden" name="id" value="<?= $empl['ID'] ?>">
            <select name="project">
                <option value="">Pick up the project:</option>
                <option value=""></option>

                <?
                foreach ($project as $proj) {
                  if ($projektas == $proj[0]) {
                    $selected = "selected=selected";
                    } else {
                    $selected = FALSE;
                    }
                    echo '<option  value="'.$proj[0].'" '.$selected.' > '.$proj[0].''. ' '.'' .$proj[1].'</option>';
                }
                ?>

            </select><br>
            <button type="submit" class="btn btn-info">ASSIGN</button>
        </form>
    </div>

</body>

</html>