<table class="table table-hover" style="background-color: #28A745;">
    <thead>
        <tr>
            <th scope="col" class="text-center" style="width:20%">Project_ID</th>
            <th scope="col" class="text-center" style="width:30%">Name</th>
            <th scope="col" class="text-center" style="width:30%">Project</th>
            <th scope="col" class="text-center" style="width:20%">Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        // connect to database:
        require_once './config/connect.php';
        //require_once './functions/functions.php';

        $emploAndProjects = mysqli_query($connect, "SELECT projects.project, projects.ID, GROUP_CONCAT(employees.Name separator ', ')
                                                    FROM projects
                                                    LEFT JOIN employees
                                                    ON projects.ID = employees.pro_ID
                                                    group by projects.ID
                                                    order by projects.ID desc;");

        $emploAndProjects = mysqli_fetch_all($emploAndProjects);
        foreach ($emploAndProjects as $emploA) {
        ?>
            <!-- atjungiu php koda -->
            <tr>
                <td scope="row" class="text-center" style="width:20%"><?= $emploA[1] ?></td>
                <td class="text-center" style="width:30%"><?= $emploA[2] ?></td>
                <td class="text-center" style="width:30%"><?= $emploA[0] ?></td>
                <td class="text-center" class="align-middle" style="width:20%">
                    <form action="" name="action" method="post">
                        <input class="center" type="hidden" name="action">
                        <button type="submit" name="action" class="btn btn-warning">UPDATE</button>
                    </form>
                </td>
            </tr>
        <?php // vel prijungiu php koda
        }
        ?>
    </tbody>
</table>
<?

// $logika = $_POST['action'];
// if (isset($logika)) 
// echo '
// <table class="table" style="background-color: #28A745;">
// <tbody>
// <tr>
// <td scope="row" class="text-center text-white" style="width:100%">
//     <h5>Update data to project and employees</h5>
// </td>
// </tr>
// </tbody>
// </table>
// <form class="text-center action="./functions/create.php" method="post">
//     <input class="center" type="text" name="name" placeholder="Name">
//     <button type="submit">Add</button>
// </form>

// ' ?>