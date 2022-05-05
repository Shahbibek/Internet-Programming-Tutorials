<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="row d-flex align-items-center justify-content-left h-100">
        <div class="col-md-7 col-md-5 offset-xl-1">
          <form action="insrec.php" method="POST">
            <!-- Email input -->
            <div class="form-outline mb-3">
                <label class="form-label" for="form1Example13">machine_name</label>
              <input type="text" id="form1Example13"name="name" class="form-control form-control-m" placeholder="Enter machine_name" />
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-3">
                <label class="form-label" for="form1Example23">Description</label>
              <input type="text" name="desc"id="form1Example23" class="form-control form-control-m" placeholder="Enter Description" />
            </div>
  
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-m btn-block">Save</button>
            <button type="reset" class="btn btn-success btn-m btn-block">Reset</button><br/><br/>
          </form>
        </div>
      </div>
</body>
</html>