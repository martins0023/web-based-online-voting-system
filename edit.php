<?php
session_reset();
$uniqueid = "";
$unique_id = "";
$unique_id1 = "";
$database = "";
$result = "";
$results = "";

$errors = array(); ;

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'register');
$db = mysqli_connect('localhost', 'root', '', 'superadmin');

if (isset($_POST['star1'])) {

$uniqueid = mysqli_real_escape_string($db, $_POST['uniqueid']);
$unique_id = mysqli_real_escape_string($db, $_POST['unique_id']);


// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array
if (empty($uniqueid)) { array_push($errors, "You haven't voted."); }
if (empty($unique_id)) { array_push($errors, "You haven't confirmed your ID..."); }

if ($uniqueid != $unique_id) {
  array_push($errors, "The unique_ID does not match");
  echo "<h6 class='text-info specialHead text-center'><strong> Unique ID does not match..</strong></h6>";
  }

// first check the database to make sure 
// a user hasn't cast their vote already
if (count($errors) == 0) {
  $user_check_query = "SELECT * FROM edit1 WHERE unique_id='$unique_id' LIMIT 1";
  $query = "SELECT * FROM users WHERE uniqueid='$uniqueid' ";    
  $results = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($results);  

  if ($user) { // if user exists
      if ($user['unique_id'] === $unique_id) {
        array_push($errors, "Vote already exists");
        header('location: disrupt.php');
      }
  
    }

    if (count($errors) == 0) {
      
        $user_check_query = "INSERT INTO edit1 (unique_id) 
                  VALUES('$unique_id')";
      mysqli_query($db, $user_check_query);
      header('location: result.php');
  
  if (mysqli_num_rows($results) == 1) {
    $_SESSION['uniqueid'] = $uniqueid;
    $_SESSION['success'] = "checked sucessfully";
    header('location: result.php');
  }
  
  else{
      array_push($errors, "Unique_ID doesen't exist... or invalid credentials");
      header('location: invalid.php');
      }
    }
  }
}

?>
