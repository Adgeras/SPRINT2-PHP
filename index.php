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

  <a class="btn btn-primary" href="/SPRINT2PHPsenas?a=darbuotojai">Employees</a>
  <a class="btn btn-secondary" href="/SPRINT2PHPsenas?a=projektai">Projects</a>
  <a class="btn btn-success" href="/SPRINT2PHPsenas?a=innerJoin">Employees&Projects</a>

  <?php

  $lenta = 'employees_tbl.php'; // pagal nutylejima sita

  if (isset($_GET["a"]) and $_GET["a"] === 'projektai') {
    $lenta = 'project_tbl.php';
  } elseif (isset($_GET["a"]) and $_GET["a"] === 'innerJoin') {
    $lenta = 'emploAndProjects_tbl.php';
  } else $lenta = 'employees_tbl.php';
  include $lenta;

  ?>


</body>

</html>