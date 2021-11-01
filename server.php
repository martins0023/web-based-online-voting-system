<?php
session_reset();

// initializing variables
$uniqueid = "";
$fullname = "";
$maricno = "";
$email    = "";
$username = "";
$department = "";
$level = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'register');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $uniqueid = mysqli_real_escape_string($db, $_POST['uniqueid']);
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  //$maricno = mysqli_real_escape_string($db, $_POST['maricno']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $department = mysqli_real_escape_string($db, $_POST['department']);
  $level = mysqli_real_escape_string($db, $_POST['level']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $school_id = mysqli_real_escape_string($db, $_POST['school_id']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($uniqueid)) { array_push($errors, "Unique ID is required"); }
  if (empty($fullname)) { array_push($errors, "Full name is required"); }
  //if (empty($maricno)) { array_push($errors, "Matric No is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($department)) { array_push($errors, "Department is required");}
  if (empty($level)) { array_push($errors, "Level is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($school_id)) { array_push($errors, "Verified SChool ID CARD is required"); }
  // Select file type
  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email 
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' OR school_id='$school_id' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }

    if ($user['school_id'] === $school_id) {
      array_push($errors, "ID card registered already");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (uniqueid, fullname, maricno, email, username, department, level, password, school_id) 
  			  VALUES('$uniqueid', '$fullname', '$maricno', '$email', '$username', '$department', '$level', '$password', '$school_id')";
    mysqli_query($db, $query);
    
    //block1
    $uniqueid = md5($uniqueid);
    $fullname = md5($fullname);
    $maricno = md5($maricno);
    $email = md5($email);
    $username = md5($username);
    $department = md5($department);
    $level = md5($level);
    $password = md5($password_1);
    $school_id = ($school_id);
    $query = "INSERT INTO block1 (uniqueid, fullname, maricno, email, username, department, level, password) 
  			  VALUES('$uniqueid', '$fullname', '$maricno', '$email', '$username', '$department', '$level', '$password')";
    mysqli_query($db, $query);
    
    //block2
    $uniqueid = md5($uniqueid);
    $fullname = md5($fullname);
    $maricno = md5($maricno);
    $email = md5($email);
    $username = md5($username);
    $department = md5($department);
    $level = md5($level);
    $password = md5($password_1);
    $school_id = ($school_id);
    $query = "INSERT INTO block2 (uniqueid, fullname, maricno, email, username, department, level, password) 
  			  VALUES('$uniqueid', '$fullname', '$maricno', '$email', '$username', '$department', '$level', '$password')";
    mysqli_query($db, $query);
    
    //block3
    $uniqueid = md5($uniqueid);
    $fullname = md5($fullname);
    $maricno = md5($maricno);
    $email = md5($email);
    $username = md5($username);
    $department = md5($department);
    $level = md5($level);
    $password = md5($password_1);
    $school_id = ($school_id);
    $query = "INSERT INTO block3 (uniqueid, fullname, maricno, email, username, department, level, password) 
  			  VALUES('$uniqueid', '$fullname', '$maricno', '$email', '$username', '$department', '$level', '$password')";
  	mysqli_query($db, $query);

  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: /verifyemail.php/');
  }
}

// ...
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: continue.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  

  //...
  //....


  
  ?>


