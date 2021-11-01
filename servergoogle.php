<?php 

session_start();

// initializing variables
$username = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'register');

// check for all registered matric number
if (isset($_POST['check_auth'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);

    if (empty($email)) {
        array_push($errors, "Your email is required to continue...");
      }
  
      if (count($errors) == 0) {
        $query = "SELECT * FROM users WHERE username= '$username' or email='$email'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['email'] = $email;
          $_SESSION['success'] = "checked";
          header('location: script.php');
  
        }else {
          array_push($errors, "Unable to Authenticate...");
          echo "Unable to authenticate";
          echo "<script>alert ('Couldnt Authenticate, Server Error.... Try again with your original registered email address'); </script>";
         
        }
      }
    }


?>