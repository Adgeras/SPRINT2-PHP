<table class="table" style="background-color: #6C757D;">
  <thead>
    <tr>
      <th scope="col" class="text-center" style="width:20%">ID</th>
      <th scope="col" class="text-center" style="width:40%">Projektas</th>
      <th scope="col" class="text-center" style="width:20%">Action</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
  // duombazės pajungimas:
require_once './config/connect.php';

    $projektai = (mysqli_query($connect, "SELECT * FROM darbuotojai.projektai"));
    $projektai = mysqli_fetch_all($projektai);
    //printink($darbuotojai);
      foreach($projektai as $projektas){
        ?> <!-- atjungiu php koda -->
          <tr>
            <th scope="row" class="text-center" style="width:20%"><?=$projektas[0] ?></th>
            <td class="text-center" style="width:40%"><?=$projektas[1]?></td>
            <td class="text-center" style="width:20%"></td>
          </tr>
        <?php // vel prijungiu php koda
      }       
  ?>
  </tbody>
</table> 

