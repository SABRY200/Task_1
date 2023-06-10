<?php
$largest = "";
$lower = "";

if($_POST){
#Condition_For_Largest_Number
    if($_POST['num1'] > $_POST['num2'] AND $_POST['num1'] > $_POST['num3']){
        $largest = $_POST['num1'];
    }elseif($_POST['num2'] > $_POST['num3']){
        $largest = $_POST['num2'];
    }else{
        $largest = $_POST['num3'];
    }
#Condition_For_Lower_Number
    if($_POST['num1'] < $_POST['num2'] AND $_POST['num1'] < $_POST['num3']){
        $lower = $_POST['num1'];
    }elseif($_POST['num2'] < $_POST['num3']){
        $lower = $_POST['num2'];
    }else{
        $lower = $_POST['num3'];
    }

}
$max_number = $largest;
$mini_number = $lower;

$number = "<div class='alert alert-danger'>
            <ul>
            <li>Max Number: $max_number</li>
            <li>Mini Number: $mini_number</li>
            </ul>
            </div>";


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Number</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-dark text-center h1">Number</h1>
            </div>
            <div class="offset-4 col-4">
                <form action="" method="post">
                    <div class="form-group">
                      <label for="num1">Number One</label>
                      <input type="number" name="num1" id="num1" class="form-control" placeholder="Number One" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="num2">Number Two</label>
                      <input type="number" name="num2" id="num2" class="form-control" placeholder="Number Two" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="num3">Number Three</label>
                      <input type="number" name="num3" id="num3" class="form-control" placeholder="Number Three" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <button name="calc" value="calc" class="btn btn-dark rounded">Max And Minimam!</button>
                    </div>
                </form>
                <?= $number ?>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>