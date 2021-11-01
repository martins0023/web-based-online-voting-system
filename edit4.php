<?php
session_reset();
$unique_id = "";


$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'superadmin');

// COUNT VOTE
if (isset($_POST['star4'])) {

  $uniqueid = mysqli_real_escape_string($db, $_POST['uniqueid']);
  $unique_id = mysqli_real_escape_string($db, $_POST['unique_id']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($uniqueid)) { array_push($errors, "You haven't voted."); }
  if (empty($unique_id)) { array_push($errors, "You haven't voted."); }

  if ($uniqueid != $unique_id) {
    array_push($errors, "The numbers do not match");
    echo "<script>alert('The Unique_ID does not match');</script>";
    }

  // first check the database to make sure 
  // a user hasn't cast their vote already
  $user_check_query = "SELECT * FROM edit4 WHERE unique_id='$unique_id' LIMIT 1";
  $query = "SELECT * FROM users WHERE uniqueid='$uniqueid' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $res = mysqli_query($database, $query);
  $user = mysqli_fetch_assoc($result);
  $usr = mysqli_fetch_assoc($res);
  
  if ($user) { // if user exists
    if ($user['unique_id'] === $unique_id) {
      array_push($errors, "You voted already, don't try to manipulate the system. Thanks..");
      echo "You voted already, don't try to manipulate the system. Thanks..";
      header('location: disrupt.php');
      echo session_abort();    
    }
  }

  if ($usr) {
    if ($usr['uniqueid'] != $uniqueid) {
      array_push($errors, "Unique_ID not registered, error communicating with the server...");
      echo "<script>alert('Unique_ID not registered, error communicating with the server...'); </script>";
    }
  }


  // Finally, count user vote if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO edit4 (unique_id) 
  			  VALUES('$unique_id')";
    if(mysqli_query($db, $query)){// Finally, add vote

      header('location: result4.php'); 
          
				}
				else
				{
					echo "<img src='img/error.png' width='70' height='70'>";
					echo "<h3 class='text-info specialHead text-center'><strong> SORRY! WE'VE SOME ISSUE..</strong></h3>";
					echo "<a href='justvoteblock.php' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finish</strong> </a>";
				}
    }
  }

/// check user
  
?>
