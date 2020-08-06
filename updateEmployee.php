<?php
require_once './config/connect.php';
// $oldNameID = $_GET['id']; // have an ID for current employee
// echo ($oldNameID) . "<br>";

// $oldName = mysqli_query($connect, "SELECT * FROM ddarbuotojai
// WHERE ID LIKE '$oldNameID'; "); // have an ddarbuotojai table item with current ID

// $oldName = mysqli_fetch_assoc($oldName); // cia turiu array
// print_r($oldName['Darbuotojo_Vardas']); // cia turiu current darbuotojo varda
// require_once './functions/update.php';
if (isset($_GET['edit-form'])) {
    $get_darbuotojo_id = $_GET['edit-form'];
    $sql = "select id, darbuotojo_vardas from ddarbuotojai where id = $get_darbuotojo_id";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ob_start();
            $single_id = $row['id'];
            $single_name = $row['darbuotojo_vardas'];
            echo "
                <form action='' method='post'>
                    <input type='text' name='upd-first-name' value='$single_name'>
                    <input type='submit' value='Update'>
                </form>
                ";
        }
        $updated_first_name = $_POST['upd-first-name'];
        if (isset($updated_first_name)) {
            $sql = "UPDATE ddarbuotojai SET darbuotojo_vardas = '$updated_first_name' WHERE id = $single_id";
            if (mysqli_query($connect, $sql)) {
                echo "Darbutojas updeitintas sekmingai!!!";
                header('Location: http://localhost/SPRINT2PHP/?a=darbuotojai');
            } else {
                echo trigger_error("<h2>Nepavyko upd!! = $sql - error") . mysqli_error($connect);
            }
        }
    }
    ob_end_flush();
    mysqli_close($connect);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
</head>

<body>

    <div class="container center_div">
        <h4>Update Employee</h4>
        <form action="" method="post">
            <p>Old name and ID:
                <? echo $oldName['Darbuotojo_Vardas']." and "?>
                <? echo $oldName['ID'] ?>

            </p>
            <input class="center" type="text" name="NEWname" placeholder="new name">
            <input type="submit" value='Submit'>
            <input type="hidden" name="oldid" value="$oldNameID">
        </form>
    </div>


</body>

</html>