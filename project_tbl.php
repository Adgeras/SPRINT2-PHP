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
    // connect to database:
    require_once './config/connect.php';

    $projektai = (mysqli_query($connect, "SELECT * FROM darbuotojai.projektai"));
    $projektai = mysqli_fetch_all($projektai);
    //printink($darbuotojai);
    foreach ($projektai as $projektas) {
    ?>
      <!-- atjungiu php koda -->
      <tr>
        <td scope="row" class="text-center" style="width:20%"><?= $projektas[0] ?></td>
        <td class="text-center" style="width:40%"><?= $projektas[1] ?></td>
        <td class="text-center" style="width:20%"><a href="update.php?id=" type="button" style="background-color: white;">UPDATE</a></td>
      </tr>
    <?php // vel prijungiu php koda
    }
    ?>
  </tbody>
</table>

<div class="container center_div">
  <h4>Pridėti naują projektą</h4>
  <form action="./functions/create.php" method="post">
    <input class="center" type="text" name="projectName" placeholder="Projekto pavadinimas">
    <button type="submit">Add</button>
  </form>
</div>