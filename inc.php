<?php
session_reset();

// initializing variables
$maricno = "";
$student_matric = "";
$uniqueid = "";
$fullname = "";
$email    = "";
$username = "";
$department = "";
$level = "";
$login = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'register');

//login
  // Verification
  if (isset($_POST['star1'])) {
    $uniqueid = mysqli_real_escape_string($db, $_POST['uniqueid']);

    if (empty($uniqueid)) {
      array_push($errors, "Unique_ID is required...");
    }


    if (count($errors) == 0) {
      
      $query = "SELECT * FROM users WHERE uniqueid='$uniqueid' LIMIT 1";
      $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['uniqueid'] = $uniqueid;
          $_SESSION['success'] = "Autheticated";
          header('location: result.php');

      }else {
        array_push($errors, "Unable to Authenticate...");
      }
    }
  }
  ?>