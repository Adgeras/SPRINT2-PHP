<table class="table" style="background-color: #28A745;">
    <thead>
        <tr>
            <th scope="col" class="text-center" style="width:20%">ID</th>
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


        $emploAndProjects = mysqli_query($connect, "SELECT darbuotojai.employees.ID, name, project
                                            FROM projects
                                            inner join employees 
                                            on employees.ID = projects.ID;");
        $emploAndProjects = mysqli_fetch_all($emploAndProjects);
        foreach ($emploAndProjects as $emploA) {
        ?>
            <!-- atjungiu php koda -->
            <tr>
                <td scope="row" class="text-center" style="width:20%"><?= $emploA[0] ?></td>
                <td class="text-center" style="width:40%"><?= $emploA[1] ?></td>
                <td class="text-center" style="width:40%"><?= $emploA[2] ?></td>
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
<!-- 
<div class="container center_div">
    <h4>Add new ITEM</h4>
    <form action="./functions/create.php" method="post">
        <input class="center" type="text" name="name" placeholder="Name">
        <button type="submit">Add</button>
    </form>
</div> -->