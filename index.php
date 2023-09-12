<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        <?php include  "style.css"?>
    </style>
</head>
<body class="container"></body>



       <h1 class="text-center text-primary" >Task 06</h1>
<h5 class="text-center text-dark" >Comparison Tool</h5>
    <div class="col-md-6 m-auto card p-3">
       <form method="post" >
            <div class="mb-3">
                <label  class="form-label">Enter your number :</label>
                <input type="number" name="num1" class="form-control">
            </div>
            <div class="mb-3">
                <label  class="form-label">Enter your number :</label>
                <input type="number" name="num2" class="form-control">
            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-primary">Check</button>
            </div>
            </form>
            <div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 =$_POST["num1"];
                $num2 =$_POST["num2"];
                $num3 = ($num1 > $num2) ? $num1:$num2;
                echo "larger number is = ". $num3;
            }
        ?>
            </div>
       </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>