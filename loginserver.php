<?php
session_start();

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
  if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
      array_push($errors, "Username is required...");
      echo "<script> alert('Username is required');
      </script>";
    }

    if (empty($password)) {
      array_push($errors, "Password is required...");
      echo "<script> alert('Password is required');
      </script>";
    }

    if (count($errors) == 0) {
      $password = md5($password);
     
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
      $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: google.php');

      }else {
        array_push($errors, "Unable to Authenticate...");
        echo "<script>alert('Unable to Authenticate, Please try again')</script>";
      }
    }
  }
  ?>