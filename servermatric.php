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

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'register');
$database = mysqli_connect('localhost', 'root', '', 'superadmin');

// check for all registered matric number
if (isset($_POST['reg_user'])) {
  $uniqueid = mysqli_real_escape_string($db, $_POST['uniqueid']);
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $student_matric = mysqli_real_escape_string($db, $_POST['student_matric']);
  $maricno = mysqli_real_escape_string($db, $_POST['maricno']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $department = mysqli_real_escape_string($db, $_POST['department']);
  $level = mysqli_real_escape_string($db, $_POST['level']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    
  if (empty($uniqueid)) { array_push($errors, "Unique ID is required"); }
  if (empty($fullname)) { array_push($errors, "Full name is required"); }
  if (empty($student_matric)) { array_push($errors, "Your matriculation number is required"); }
  if (empty($maricno)) { array_push($errors, "Please repeat matric number...."); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($department)) { array_push($errors, "Department is required");}
  if (empty($level)) { array_push($errors, "Level is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
        //array_push($errors, "");

        if ($password_1 != $password_2) {
          array_push($errors, "The two passwords do not match");
          echo "<script> alert('The two passwords do not match');
      </script>";
          }

          if ($student_matric != $maricno) {
            array_push($errors, "The matriculation numbers do not match");
            echo "<script> alert('The matriculation numbers do not match');
      </script>";
            }
        
    
  
    if (count($errors) == 0) {
        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' OR maricno='$maricno' LIMIT 1";
        $query = "SELECT * FROM matric_n WHERE student_matric='$student_matric' ";    
        $res = mysqli_query($database, $query);
        $results = mysqli_query($db, $user_check_query);
        $usr = mysqli_fetch_assoc($res);
        $user = mysqli_fetch_assoc($results);  

        if ($user) { // if user exists
            if ($user['username'] === $username) {
              array_push($errors, "Username already exists");
              echo "<script> alert('Username already exists');</script>";
            }
        
            if ($user['email'] === $email) {
              array_push($errors, "email already exists");
              echo "<script> alert('Email already exists');</script>";
            }

            if ($user['maricno'] === $maricno) {
              array_push($errors, "Matriculation number already exists");
              echo "<script> alert('Matriculation number already exists');</script>";
            }
        
          }

          if (count($errors) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database
        
              $user_check_query = "INSERT INTO users (uniqueid, fullname, maricno, email, username, department, level, password) 
                        VALUES('$uniqueid', '$fullname', '$maricno', '$email', '$username', '$department', '$level', '$password')";
            mysqli_query($db, $user_check_query);
        
        if (mysqli_num_rows($res) == 1) {
          $_SESSION['student_matric'] = $student_matric;
          $_SESSION['success'] = "checked sucessfully";
          header('location: google.php');
        }else {
            array_push($errors, "Matriculation number not registered... or invalid credentials");
            echo "<script> alert('Matriculation number not registered... or invalid credentials');</script>";
        }
        }
    }
  }

  //
  //
  // Verification
  if (isset($_POST['validate_user'])) {
    $student_matric = mysqli_real_escape_string($database, $_POST['student_matric']);

    if (empty($student_matric)) {
      array_push($errors, "Matriculation number is required to check vote result...");
      echo "<script> alert('Matriculation number is required to check vote result...');</script>";
    }

    if (count($errors) == 0) {
     
      $query = "SELECT * FROM matric_n WHERE student_matric='$student_matric'";
      $res = mysqli_query($database, $query);
      if (mysqli_num_rows($res) == 1) {
        $_SESSION['student_matric'] = $student_matric;
        $_SESSION['success'] = "checked";
        header('location: showvote1.php');

      }else {
        array_push($errors, "Unable to Authenticate...");
        
      }
    }
  }
  

  //login
  // Verification
  if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
      array_push($errors, "Username is required...");
      echo "<script> alert('Username is required...');</script>";
    }

    if (empty($password)) {
      array_push($errors, "Password is required...");
      echo "<script> alert('Password is required...');</script>";
    }

    if (count($errors) == 0) {
      $password = md5($password);
     
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: votetime.php');

      }else {
        array_push($errors, "Unable to Authenticate...");
        echo "<script> alert('Unable to Authenticate...');</script>";
      }
    }
  }
  

  ?>