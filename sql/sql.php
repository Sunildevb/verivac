<?php
$configs = include('../config/config.php');
$servername = $configs['servername'];
$username = $configs['username'];
$password = $configs['password'];
$db = $configs['db'];
$conn = new mysqli($servername, $username, $password, $db);
print_r($_POST['submit']);
#echo "Test";
if (isset($_POST['submit'])) {
  # print_r($_SESSION['post'][]);
  echo "insert test";
  insertuser();
} else {

  echo "insert not test";
}

function sqlconn()
{
  global $conn;


  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
}

function sqldconn()
{
  global $conn;
  if (!$conn->close()) {
    die("Connction Termination Error: " . $conn->connect_error);
  }
}

function insertuser()
{
  global $conn;
  require_once "../operators/verify.php";
  #$id = mysqli_real_escape_string($conn, $_REQUEST['id']);;
  $fname = validate(mysqli_real_escape_string($conn, $_REQUEST['fname']));;
  $mname = validate(mysqli_real_escape_string($conn, $_REQUEST['mname']));;
  $lname = validate(mysqli_real_escape_string($conn, $_REQUEST['lname']));;
  $address = validate(mysqli_real_escape_string($conn, $_REQUEST['address']));;
  $dob = validate(mysqli_real_escape_string($conn, $_REQUEST['dob']));;
  $sex = validate(mysqli_real_escape_string($conn, $_REQUEST['gender']));;
  $facility = validate(mysqli_real_escape_string($conn, $_REQUEST['facility']));;
  $registration_no = validate(mysqli_real_escape_string($conn, $_REQUEST['cardno']));;
  $doi = validate(mysqli_real_escape_string($conn, $_REQUEST['innodate']));;
  $id = validate(mysqli_real_escape_string($conn, $_REQUEST['idno']));;
  #echo ($id);
  #echo "from sql finduser " . $idcard;
  $go = "INSERT INTO recipient (fname, mname, lname, address, dob, sex, facility, registration_no, idcard, doi) VALUES 
  ('$fname', '$mname', '$lname', '$address', '$dob', '$sex', '$facility', '$registration_no', '$id','$doi')";
  # $result = $conn->query($go);

  if (mysqli_query($conn, $go)) {
    echo "Records added successfully.";
  } else {
    echo "ERROR: Could not able to execute $go. " . mysqli_error($conn);
  }
}

#sqlinsertuser();

function finduser($idcard)
{
  global $conn;
  echo "from sql finduser " . $idcard;
  $go = "SELECT * FROM recipient WHERE id = $idcard";
  $result = $conn->query($go);

  while ($row = mysqli_fetch_array($result)) {
    print_r($row);
  }

  if ($result->num_rows === 0) {
    echo "No User found";
  } else {

    echo "User found";
  }
}

function listall () {
global $conn;
$go = "SELECT * FROM recipient";
$result = $conn->query($go);
$return[] = $result;
return $return;
}



?>
