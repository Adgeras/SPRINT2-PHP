<?php
require_once './config/connect.php';

$id = $_GET['id'];
$proj_to_update = mysqli_query($connect, "SELECT * FROM darbuotojai.projects
                                            where ID = '$id';");
$proj = mysqli_fetch_assoc($proj_to_update);
print_r($proj);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>

<body>
    <div class="container center_div">
        <h4>Update Project:</h4>
        <form action="./functions/updatePRJ.php" method="post">
            <input type="hidden" name="prj_id" value="<?= $proj['ID'] ?>">
            <input class="center" type="text" name="name" value="<?= $proj['Project'] ?>">
            <button type="submit">Update</button>
        </form>
    </div>
</body>


</html>