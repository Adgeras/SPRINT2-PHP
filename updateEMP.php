<?php
require_once './config/connect.php';

$id = $_GET['id'];
$item_to_update = mysqli_query($connect, "SELECT * FROM darbuotojai.employees
                                            where ID = '$id';");
$empl = mysqli_fetch_assoc($item_to_update);
//print_r($empl);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>

<body>
    <div class="container center_div">
        <h4>Update Employee:</h4>
        <form action="./functions/updateEMP.php" method="post">
            <input type="hidden" name="id" value="<?= $empl['ID'] ?>">
            <input class="center" type="text" name="name" value="<?= $empl['Name'] ?>">
            <button type="submit">Update</button>
        </form>
    </div>

</body>

</html>