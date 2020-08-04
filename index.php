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

<h4 class="text-center">Darbuotojai & Projektai</h4>

<table class="table">
  <thead>
    <tr>
      <th scope="col" class="text-center" style="width:20%">ID</th>
      <th scope="col" class="text-center" style="width:60%">Darbuotojo vardas</th>
      <th scope="col" class="text-center" style="width:20%">Action</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
  // duombazės pajungimas:
require_once 'connect.php';

    $darbuotojai = (mysqli_query($connect, "SELECT * FROM darbuotojai.ddarbuotojai"));
    $darbuotojai = mysqli_fetch_all($darbuotojai);
    //printink($darbuotojai);
      foreach($darbuotojai as $darbuotojas){
        ?> <!-- atjungiu php koda -->
          <tr>
            <th scope="row" class="text-center" style="width:20%"><?=$darbuotojas[0] ?></th>
            <td class="text-center" style="width:20%"><?=$darbuotojas[1]?></td>
          </tr>
        <?php // vel prijungiu php koda
      }       

  ?>
  </tbody>
</table> 

<?php


    ?> 
</body>
</html>
