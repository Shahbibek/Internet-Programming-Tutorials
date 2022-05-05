<?php

include "connect.php";

?>

<!doctype html>
<html lang="EN">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tutorial 12</title>
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <section style="margin: 25px;">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Tutorial 12</h2>
                <h3>User Data</h3>
                <h3 class="text-center text-success"><?php
                    session_start();
                    echo isset($_SESSION['message']) ? $_SESSION['message'] : "";
                    unset($_SESSION['message']);
                    ?></h3>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="form.php?id=<?= $row['id'] ?>"class="btn btn-success me-md-2" style="margin-bottom: 25px;">Add new record</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th scope="col ">Id</th>
                            <th scope="col ">Machine Name</th>
                            <th scope="col ">Process Name</th>
                            <th scope="col ">item Name</th>
                            <th scope="col ">Parameter Name</th>
                            <th scope="col ">Lower Tolerance</th>
                            <th scope="col ">Upper Tolerance</th>
                            <th scope="col ">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT tbl_ipmp.id,tbl_machine.machine_name,tbl_process.process_name,tbl_items.item_name,tbl_ipmp.parametername,tbl_ipmp.lower_tolerance,tbl_ipmp.upper_tolerance
                        FROM tbl_ipmp
                        INNER JOIN tbl_machine ON tbl_ipmp.machine_id = tbl_machine.id
                        INNER JOIN tbl_process ON tbl_ipmp.process_id = tbl_process.id
                        INNER JOIN tbl_items ON tbl_ipmp.item_id=tbl_items.id WHERE tbl_ipmp.is_delete = 0;";
                        $result = $db->query($sql);
                        if ($result->num_rows) {
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <tr class="text-center pb-2">

                                    <th><?= $row['id'] ?></th>
                                    <td><?= $row['machine_name'] ?></td>
                                    <td><?= $row['process_name'] ?></td>
                                    <td><?= $row['item_name'] ?></td>
                                    <td><?= $row['parametername'] ?></td>
                                    <td><?= $row['lower_tolerance'] ?></td>
                                    <td><?= $row['upper_tolerance'] ?></td>
                                    <td>
                                        <a href="form.php?id=<?= $row['id'] ?>" class="btn btn-primary mb-2" style="text-decoration: none;margin-right: 2px; ">Edit</a>
                                        <a href="delete_user.php?id=<?= $row['id'] ?>" class="btn btn-danger mb-2" style="text-decoration: none; ">Delete</a>
                                    </td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>