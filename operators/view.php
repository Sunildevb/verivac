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
        <caption>All Entries</caption>
            <thead class="thead-dark"d>
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
                    <th>Edit/View Entry</th>
                </tr>
            </thead>

            <?php

            $result = listall();
            #echo $result['id'];
            #print_r ($result);
           

            if($result){
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                      $return[] = $row;  
                      echo '
                      <tbody>
                      <tr>          
                      <td>'. $row["fname"].'</td>
                      <td>'. $row["mname"].'</td>
                      <td>'. $row["lname"].'</td>
                      <td>'. $row["address"].'</td>
                      <td>'. $row["dob"].'</td>
                      <td>'. $row["sex"].'</td>
                      <td>'. $row["facility"].'</td>
                      <td>'. $row["registration_no"].'</td>
                      <td>'. $row["idcard"].'</td>
                      <td>'. $row["doi"].'</td>
                      <td><button type="button" class="btn btn-default" aria-label="Edit">
                      <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-danger" aria-label="Delete">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-info" aria-label="View QR">
                  <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                </button>
                      
                      </td>
                      </tr>';
                    }
                }
              }

           
            #$fname = count($result);


                #while ($row = $result) {
                   
                   


                
            


            ?>
            
                         </tbody>
        </table>
    </div>

</body>

</html>