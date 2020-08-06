<table class="table" style="background-color: #6C757D;">
  <thead>
    <tr>
      <th scope="col" class="text-center" style="width:20%">ID</th>
      <th scope="col" class="text-center" style="width:40%">Project</th>
      <th scope="col" class="text-center" style="width:20%">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php
    // connect to database:
    require_once './config/connect.php';
    require_once './functions/functions.php';

    $projects = (mysqli_query($connect, "SELECT * FROM darbuotojai.projects"));
    $projects = mysqli_fetch_all($projects);
    //printink($projects);
    foreach ($projects as $projekt) {
    ?>
      <!-- atjungiu php koda -->
      <tr>
        <td scope="row" class="text-center" style="width:20%"><?= $projekt[0] ?></td>
        <td class="text-center" style="width:40%"><?= $projekt[1] ?></td>
        <td class="text-center" style="width:20%">
          <a href="update.php?id=" type="button" class="btn btn-warning">
            UPDATE
          </a>
        </td>
      </tr>
    <?php // vel prijungiu php koda
    }
    ?>
  </tbody>
</table>

<div class="container center_div">
  <h4>Add new project</h4>
  <form action="./functions/create.php" method="post">
    <input class="center" type="text" name="projectName" placeholder="Project name">
    <button type="submit">ADD</button>
  </form>
</div>