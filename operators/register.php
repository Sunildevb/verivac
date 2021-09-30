<?php


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
    <h1>Hello, world!</h1>
    <div class="container">
        <p>Please input new user details:</p> <!-- Content here -->

        <form action="./sql/sql.php" method="POST">
            <div class="form-group">

                <div class="input-group mb-3">
                    <span class="input-group-text">First, Middle and last name:</span>
                    <input type="text" aria-label="First name" class="form-control" id="fname" name="fname">
                    <input type="text" aria-label="Last name" class="form-control" id="mname" name="mname">
                    <input type="text" aria-label="Last name" class="form-control" id="lname" name="lname">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="address">Address:</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="address">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <span class="input-group-text">Date of Birth</span>
                    <input type='text' class="form-control" id='dob' style='width: 300px;' name="dob">

                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Gender</label>
                    <select class="form-select" id="gender" name ="gender">
                        <option selected>Choose...</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="facility" >Facility:</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="facility">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="cardno">Vaccination Card No</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  name ="cardno">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="idno" >Identification No</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="idno">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="innodate" >Date of Innoculation</span>
                    <input type='text' class="form-control" id='datepicker' style='width: 300px;' name="innodate">

                </div>


            </div>
            <button type="submit" class="btn btn-success" id="submit-btn" name="submit">Submit</button>
        </form>






    </div>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src='http://localhost/js/bootstrap-datepicker.min.js' type='text/javascript'></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->

    <!-- Script -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datepicker').datepicker();
        });

        $(document).ready(function() {
            $('#dob').datepicker();
        });
    </script>


</body>

</html>