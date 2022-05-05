<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 12</title>
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <section style="margin: 25px;">
        <div class="container">
            <div class="row">
                <?php
                    include("connect.php");
                    $id = isset($_GET['id']) ? $_GET['id'] : 0;
                    $result = $db->query("SELECT id , machine_name ,description from tbl_machine where id=$id");
                    $row = $result->fetch_assoc();
                ?>
                <h2 class="text-center">Tutorial 12</h2>
                <form method="post" action="store.php">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo isset($row['id']) ? $row['id'] : 0; ?>" />
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="machine_name">Machine Name:</label>
                        <input type="text" name="machine_name" id="machine_name" value="<?php echo isset($row['machine_name'])?$row['machine_name']:""; ?>" class="form-control" />
                    </div>
                    <div class="form-group mt-3">
                        <label class="form-label" for="description">Description:</label>
                        <input type="text" name="description" id="description" value="<?php echo isset($row['description'])?$row['description']:""; ?>" class="form-control" />
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a class="btn btn-danger" href="javascript:history.go(-1)">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>