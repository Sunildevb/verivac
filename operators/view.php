<?php
include_once "../sql/sql.php";



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Hover Rows</h2>
        <p>The .table-hover class enables a hover state on table rows:</p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Sex</th>
                    <th>Facility</th>
                    <th>Registration No.</th>
                    <th>ID No.</th>
                    <th>Date of Innoculation</th>
                </tr>
            </thead>

            <?php

            $result[] = listall();
            #echo $result['id'];
            #print_r ($result);
           


                #while ($row = $result) {
                   print_r($results[0]);
                    echo '
                    
                    <tbody>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                </tr>
                    
                    
                    
                    ';


                
            


            ?>
            
                         </tbody>
        </table>
    </div>

</body>

</html>