<table style="background-color: #007BFF;" class="table">
  <thead>
    <tr>
      <th scope="col" class="text-center" style="width:20%">ID</th>
      <th scope="col" class="text-center" style="width:40%">Darbuotojas</th>
      <th scope="col" class="text-center" style="width:20%">Action</th>
    </tr>
  </thead>
  <tbody >
  
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
            <td class="text-center" style="width:20%"></td>
          </tr>
        <?php // vel prijungiu php koda
      }       
  ?>
  </tbody>
</table> 
<?php
