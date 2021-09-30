<?php
session_start();
include 'sql.php';


echo "<div> POST BODY <br>";
print_r($_POST);
echo "</div>";
$_SESSION['post'][]=$_POST;
/* if (!is_numeric($_POST['cardno'])) {
    echo "Invalid input";
} else {

    finduser($_POST['cardno']);


  
} */



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href='./css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Hello, world!</title>
</head>

<body>


    <form action="sql.php" method="POST">
        <div class="form-group">

            <button type="submit" class="btn btn-success" id="submit-btn">Submit</button>
    </form>


</body>

</html>