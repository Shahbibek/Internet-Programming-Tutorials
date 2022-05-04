<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <link href="" rel="stylesheet" href="css/bootstrap.min.css"/> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tutorial4</title>
    <style>
    /* h1 {text-align:left;} */
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-3">Simple Interest Calculator</h1>
        <form action="result.php" method="get">
            <div class="form-group mt-3">
                <label for="princ">Principle</label>
                <input type="text" name="princ" id="princ" value="" class="form-control">
            </div>

            <div class="form-group mt-3">
                <label for="roi">Rate Of Interest</label>
                <input type="text" name="roi" id="roi" value="" class="form-control">
            </div>
            
            <div class="form-group mt-3">
                <label for="noy">Number Of Years</label>
                <input type="text" name="noy" id="noy" value="" class="form-control">
            </div>
            <div class="form-group mt-3">
                <label for=""></label>
                <input type="submit"   class="btn btn-primary mt-3" name="submit" value="submit">
            </div>

        </form>
    </div>
</body>
</html>