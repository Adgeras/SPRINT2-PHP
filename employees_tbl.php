<table class="table table-hover" style="background-color: #007BFF;">
    <thead>
        <tr>
            <th scope="col" class="text-center" style="width:10%">ID</th>
            <th scope="col" class="text-center" style="width:10%">PRO_ID</th>
            <th scope="col" class="text-center" style="width:30%">Name</th>
            <th scope="col" class="text-center" style="width:50%">Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        // connect to database:
        require_once './config/connect.php';
        //require_once './functions/functions.php';


        $employees = mysqli_query($connect, "SELECT * FROM darbuotojai.employees");
        $employees = mysqli_fetch_all($employees);
        foreach ($employees as $emplo) {
        ?>
            <!-- atjungiu php koda -->
            <tr>
                <td scope="row" class="text-center" style="width:10%"><?= $emplo[0] ?></td>
                <td class="text-center" style="width:10%"><?= $emplo[2] ?></td>
                <td class="text-center" style="width:30%"><?= $emplo[1] ?></td>
                <td class="text-center" class="align-right" style="width:50%">
                    <a href="updateEMP.php?id=<?= $emplo[0] ?>" type="button" class="btn btn-warning">
                        UPDATE
                    </a>
                    <a href="assign.php?id=<?= $emplo[0] ?>&a=<?= $emplo[2] ?>" type="button" class="btn btn-info">
                        ASSIGN
                    </a>
                    <a href="deleteEMP.php?id=<?= $emplo[0] ?>" type="button" class="btn btn-danger">
                        DELETE
                    </a>
                </td>
            </tr>
        <?php // vel prijungiu php koda
        }
        ?>
    </tbody>
</table>

<div class="container center_div">
    <h4>Add new employe</h4>
    <form action="./functions/create.php" method="post">
        <input class="center" type="text" name="name" placeholder="Name">
        <button type="submit">Add</button>
    </form>
</div>