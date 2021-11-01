<?php
session_reset();
$uniqueid = "";
$unique_id = "";
$unique_id1 = "";
$database = "";

$errors = array(); ;

// connect to the database
$database = mysqli_connect('localhost', 'root', '', 'register');
$db = mysqli_connect('localhost', 'root', '', 'superadmin');


// COUNT VOTE FOR PRESIDENT
if (isset($_POST['star1'])) {

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
  $user_check_query = "SELECT * FROM edit1 WHERE unique_id='$unique_id' LIMIT 1";
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
      echo session_abort();
    }
  }



  // Finally, count user vote if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO edit1 (unique_id) 
  			  VALUES('$unique_id')";
    if(mysqli_query($db, $query)){// Finally, add vote

      header('location: result.php'); 
          
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


// COUNT VOTE
if (isset($_POST['star5'])) {

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
  $user_check_query = "SELECT * FROM edit5 WHERE unique_id='$unique_id' LIMIT 1";
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

  	$query = "INSERT INTO edit5 (unique_id) 
  			  VALUES('$unique_id')";
    if(mysqli_query($db, $query)){// Finally, add vote

      header('location: result5.php'); 
          
				}
				else
				{
					echo "<img src='img/error.png' width='70' height='70'>";
					echo "<h3 class='text-info specialHead text-center'><strong> SORRY! WE'VE SOME ISSUE..</strong></h3>";
					echo "<a href='justvoteblock.php' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finish</strong> </a>";
				}
    }
  }


  //COUNT VOTE
  if (isset($_POST['star6'])) {

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
    $user_check_query = "SELECT * FROM edit6 WHERE unique_id='$unique_id' LIMIT 1";
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
  
      $query = "INSERT INTO edit6 (unique_id) 
            VALUES('$unique_id')";
      if(mysqli_query($db, $query)){// Finally, add vote
  
        header('location: result6.php'); 
            
          }
          else
          {
            echo "<img src='img/error.png' width='70' height='70'>";
            echo "<h3 class='text-info specialHead text-center'><strong> SORRY! WE'VE SOME ISSUE..</strong></h3>";
            echo "<a href='justvoteblock.php' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finish</strong> </a>";
          }
      }
    }


      //COUNT VOTE
  if (isset($_POST['star7'])) {

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
    $user_check_query = "SELECT * FROM edit7 WHERE unique_id='$unique_id' LIMIT 1";
    $query = "SELECT * FROM users WHERE uniqueid='$uniqueid' LIMIT 1";
    $res = mysqli_query($database, $query);
    $result = mysqli_query($db, $user_check_query);
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
  
      $query = "INSERT INTO edit7 (unique_id) 
            VALUES('$unique_id')";
      if(mysqli_query($db, $query)){// Finally, add vote
  
        header('location: result7.php'); 
            
          }
          else
          {
            echo "<img src='img/error.png' width='70' height='70'>";
            echo "<h3 class='text-info specialHead text-center'><strong> SORRY! WE'VE SOME ISSUE..</strong></h3>";
            echo "<a href='justvoteblock.php' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finish</strong> </a>";
          }
      }
    }
  


      //COUNT VOTE
  if (isset($_POST['star8'])) {

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
    $user_check_query = "SELECT * FROM edit8 WHERE unique_id='$unique_id' LIMIT 1";
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
  
      $query = "INSERT INTO edit8 (unique_id) 
            VALUES('$unique_id')";
      if(mysqli_query($db, $query)){// Finally, add vote
  
        header('location: result8.php'); 
            
          }
          else
          {
            echo "<img src='img/error.png' width='70' height='70'>";
            echo "<h3 class='text-info specialHead text-center'><strong> SORRY! WE'VE SOME ISSUE..</strong></h3>";
            echo "<a href='justvoteblock.php' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finish</strong> </a>";
          }
      }
    }
  
?>
