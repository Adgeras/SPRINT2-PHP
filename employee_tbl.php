<table style="background-color: #007BFF;" class="table">
  <thead>
    <tr>
      <th scope="col" class="text-center" style="width:20%">ID</th>
      <th scope="col" class="text-center" style="width:40%">Darbuotojas</th>
      <th scope="col" class="text-center" style="width:20%">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php
    // connect to database:
    require_once './config/connect.php';


    $darbuotojai = (mysqli_query($connect, "SELECT * FROM darbuotojai.ddarbuotojai"));
    $darbuotojai = mysqli_fetch_all($darbuotojai);
    //printink($darbuotojai);
    foreach ($darbuotojai as $darbuotojas) {
    ?>
      <!-- atjungiu php koda -->
      <tr>
        <td scope="row" class="text-center" style="width:20%"><?= $darbuotojas[0] ?></td>
        <td class="text-center" style="width:40%"><?= $darbuotojas[1] ?></td>
        <td class="text-center" style="width:20%"><a href="update.php?id=" type="button" style="background-color: white;">UPDATE</a></td>
      </tr>
    <?php // vel prijungiu php koda
    }
    ?>
  </tbody>
</table>

<div class="container center_div">
  <h4>Pridėti naują darbuotoją</h4>
  <form action="./functions/create.php" method="post">
    <input class="center" type="text" name="name" placeholder="Vardas">
    <button type="submit">Add</button>
  </form>
</div>