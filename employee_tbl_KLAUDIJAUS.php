<table style="background-color: #007BFF;" class="table">
  <thead>
    <tr>
      <th scope="col" class="text-center" style="width:20%">ID</th>
      <th scope="col" class="text-center" style="width:40%">Employee</th>
      <th scope="col" class="text-center" style="width:20%">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php
    // connect to database:
    require_once './config/connect.php';
    require_once './functions/functions.php';

    $darbuotojai = mysqli_query($connect, "SELECT id, darbuotojo_vardas FROM ddarbuotojai");
    printink($darbuotojai);
    if (mysqli_num_rows($darbuotojai) > 0) { // pasiziuriu ar lenteleje kas nors yra
      while ($row = mysqli_fetch_assoc($darbuotojai)) {
        $DarbuotojoID = $row['ID'];
        $DarbuotojoVardas = $row['darbuotojo_vardas'];
        echo "
          <tr>
            <td scope='row' class='text-center' style='width:20%'>$DarbuotojoID</td>
            <td class='text-center' style='width:40%'>$DarbuotojoVardas</td>
            <td class='text-center' style='width:20%'>
            <form action='' method='get'>
              <input type='submit' value='Edit'>
              <input type='hidden' name='edit-form' value='$DarbuotojoID'>
            </form>
        </td>
      </tr>
          ";
      }
    } else {
      echo "Rows < 0";
    }
    // $darbuotojai = mysqli_fetch_all($darbuotojai);
    //printink($darbuotojai);
    // foreach ($darbuotojai as $darbuotojas) {
    // var_dump($darbuotojas);
    // $DarbuotojoID = $darbuotojas[0];
    // $DarbuotojoVardas = $darbuotojas[2];
    ?>
    <?php // vel prijungiu php koda
    // $edit_form = $_GET['edit-form'];
    // if (isset($_GET['edit-form'])) {
    //   echo "Chosen persons to edit ID: " . $_GET['edit-form'];
    // }
    include_once('updateEmployee.php');
    ?>
  </tbody>
</table>

<div class="container center_div">
  <h4>Add new employee</h4>
  <form action="./functions/create.php" method="post">
    <input class="center" type="text" name="name" placeholder="Name">
    <button type="submit">Add</button>
  </form>
</div>