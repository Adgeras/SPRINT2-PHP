<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/main.css">
    <title>Darbuotojai&Projektai</title>
</head>
<body>
  <a class="btn btn-primary"href="http://localhost/SPRINT2%20PHP?a=darbuotojai">Darbuotojai</a>
  
  <a class="btn btn-secondary"href="http://localhost/SPRINT2%20PHP?a=projektai">Projektai</a>
<?php
require_once 'connect.php';

    $lenta = 'employee_tbl.php'; // pagal nutylejima sita
    if (isset($_GET["a"]) AND $_GET["a"] === 'projektai') {
    $lenta = 'project_tbl.php';
    } else {
      $lenta = 'employee_tbl.php';
    }
include $lenta;
?>
<h4>Pridėti naują darbuotoją</h4>
<form action="" method="">
  <p>Title</p>
  <input type="text" name="title">
  <p>Aprašas</p>
  <textarea name="description"></textarea>

</form>

</body>
</html>
