<?php
session_reset();

// initializing variables
$fullname = "";
$department = "";
$matric_no    = "";
$state_of_origin = "";
$level = "";
$dob = "";
$student_matric = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'superadmin');

//ADD PRESIDENTIAL CANDIDATE
if (isset($_POST['add_pres'])) {
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $department = mysqli_real_escape_string($db, $_POST['department']);
    $matric_no = mysqli_real_escape_string($db, $_POST['matric_no']);
    $state_of_origin = mysqli_real_escape_string($db, $_POST['state_of_origin']);
    $level = mysqli_real_escape_string($db, $_POST['level']);
    $imagee = mysqli_real_escape_string($db, $_POST['imagee']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($fullname)) { array_push($errors, "Full name is required"); }
    if (empty($department)) { array_push($errors, "Department is required");}
    if (empty($matric_no)) { array_push($errors, "Matric No is required"); }
    if (empty($state_of_origin)) { array_push($errors, "State of origin is required"); }
    if (empty($level)) { array_push($errors, "Level is required"); }
    if (empty($imagee)) { array_push($errors, "Image is required"); }
    if (empty($dob)) { array_push($errors, "D.O.B is required"); }

      // first check the database to make sure 
  // a user does not already exist  
  $user_check_query = "SELECT * FROM pres1 WHERE matric_no='$matric_no' OR imagee='$imagee' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['matric_no'] === $matric_no) {
      array_push($errors, "User already exists");
    }

    if ($user['imagee'] === $imagee) {
      array_push($errors, "User already exists");
    }
  }
  
  if (count($errors) == 0) {
      $query = "INSERT INTO pres1 (fullname, department, post, matric_no, state_of_origin, level, imagee, dob) 
      VALUES('$fullname', '$department', '$post', '$matric_no', '$state_of_origin', '$level', '$imagee', '$dob')";
      mysqli_query($db, $query);
      $_SESSION['success'] = "Submitted successfully";
      array_push($errors, "Submitted successfully....");

  }
}

//ADD VICE PRESIDENTIAL CANDIDATE
if (isset($_POST['add_vice'])) {
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $department = mysqli_real_escape_string($db, $_POST['department']);
    $post = mysqli_real_escape_string($db, $_POST['post']);
    $matric_no = mysqli_real_escape_string($db, $_POST['matric_no']);
    $state_of_origin = mysqli_real_escape_string($db, $_POST['state_of_origin']);
    $level = mysqli_real_escape_string($db, $_POST['level']);
    $imagee = mysqli_real_escape_string($db, $_POST['imagee']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($fullname)) { array_push($errors, "Full name is required"); }
    if (empty($department)) { array_push($errors, "Department is required");}
    if (empty($post)) { array_push($errors, "Post is required");}
    if (empty($matric_no)) { array_push($errors, "Matric No is required"); }
    if (empty($state_of_origin)) { array_push($errors, "State of origin is required"); }
    if (empty($level)) { array_push($errors, "Level is required"); }
    if (empty($imagee)) { array_push($errors, "Image is required"); }
    if (empty($dob)) { array_push($errors, "D.O.B is required"); }

      // first check the database to make sure 
  // a user does not already exist  
  $user_check_query = "SELECT * FROM vice1 WHERE matric_no='$matric_no' OR imagee='$imagee' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['matric_no'] === $matric_no) {
      array_push($errors, "User already exists");
    }

    if ($user['imagee'] === $imagee) {
      array_push($errors, "User already exists");
    }
  }
  
  if (count($errors) == 0) {
      $query = "INSERT INTO vice1 (fullname, department, post, matric_no, state_of_origin, level, imagee, dob) 
      VALUES('$fullname', '$department', '$post', '$matric_no', '$state_of_origin', '$level', '$imagee', '$dob')";
      mysqli_query($db, $query);
      $_SESSION['success'] = "Submitted successfully";
      array_push($errors, "Submitted successfully....");

  }
}

//ADD SENATORIAL CANDIDATE
if (isset($_POST['add_sen'])) {
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $department = mysqli_real_escape_string($db, $_POST['department']);
    $post = mysqli_real_escape_string($db, $_POST['post']);
    $matric_no = mysqli_real_escape_string($db, $_POST['matric_no']);
    $state_of_origin = mysqli_real_escape_string($db, $_POST['state_of_origin']);
    $level = mysqli_real_escape_string($db, $_POST['level']);
    $imagee = mysqli_real_escape_string($db, $_POST['imagee']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($fullname)) { array_push($errors, "Full name is required"); }
    if (empty($department)) { array_push($errors, "Department is required");}
    if (empty($post)) { array_push($errors, "Post is required");}
    if (empty($matric_no)) { array_push($errors, "Matric No is required"); }
    if (empty($state_of_origin)) { array_push($errors, "State of origin is required"); }
    if (empty($level)) { array_push($errors, "Level is required"); }
    if (empty($imagee)) { array_push($errors, "Image is required"); }
    if (empty($dob)) { array_push($errors, "D.O.B is required"); }

      // first check the database to make sure 
  // a user does not already exist  
  $user_check_query = "SELECT * FROM sen1 WHERE matric_no='$matric_no' OR imagee='$imagee' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['matric_no'] === $matric_no) {
      array_push($errors, "User already exists");
    }

    if ($user['imagee'] === $imagee) {
      array_push($errors, "User already exists");
    }
  }
  
  if (count($errors) == 0) {
      $query = "INSERT INTO sen1 (fullname, department, post, matric_no, state_of_origin, level, imagee, dob) 
      VALUES('$fullname', '$department', '$post', '$matric_no', '$state_of_origin', '$level', '$imagee', '$dob')";
      mysqli_query($db, $query);
      $_SESSION['success'] = "Submitted successfully";
      array_push($errors, "Submitted successfully....");

  }
}

//ADD FOSSU CANDIDATE
if (isset($_POST['add_fossu'])) {
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $department = mysqli_real_escape_string($db, $_POST['department']);
    $post = mysqli_real_escape_string($db, $_POST['post']);
    $matric_no = mysqli_real_escape_string($db, $_POST['matric_no']);
    $state_of_origin = mysqli_real_escape_string($db, $_POST['state_of_origin']);
    $level = mysqli_real_escape_string($db, $_POST['level']);
    $imagee = mysqli_real_escape_string($db, $_POST['imagee']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($fullname)) { array_push($errors, "Full name is required"); }
    if (empty($department)) { array_push($errors, "Department is required");}
    if (empty($post)) { array_push($errors, "Post is required");}
    if (empty($matric_no)) { array_push($errors, "Matric No is required"); }
    if (empty($state_of_origin)) { array_push($errors, "State of origin is required"); }
    if (empty($level)) { array_push($errors, "Level is required"); }
    if (empty($imagee)) { array_push($errors, "Image is required"); }
    if (empty($dob)) { array_push($errors, "D.O.B is required"); }

      // first check the database to make sure 
  // a user does not already exist  
  $user_check_query = "SELECT * FROM fossu1 WHERE matric_no='$matric_no' OR imagee='$imagee' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['matric_no'] === $matric_no) {
      array_push($errors, "User already exists");
    }

    if ($user['imagee'] === $imagee) {
      array_push($errors, "User already exists");
    }
  }
  
  if (count($errors) == 0) {
      $query = "INSERT INTO fossu1 (fullname, department, post, matric_no, state_of_origin, level, imagee, dob) 
      VALUES('$fullname', '$department', '$post, '$matric_no', '$state_of_origin', '$level', '$imagee', '$dob')";
      mysqli_query($db, $query);
      $_SESSION['success'] = "Submitted successfully";
      array_push($errors, "Submitted successfully....");

  }
}

//ADD GENERAL SECRETARY CANDIDATE
if (isset($_POST['add_gensec'])) {
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $department = mysqli_real_escape_string($db, $_POST['department']);
    $post = mysqli_real_escape_string($db, $_POST['post']);
    $matric_no = mysqli_real_escape_string($db, $_POST['matric_no']);
    $state_of_origin = mysqli_real_escape_string($db, $_POST['state_of_origin']);
    $level = mysqli_real_escape_string($db, $_POST['level']);
    $imagee = mysqli_real_escape_string($db, $_POST['imagee']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($fullname)) { array_push($errors, "Full name is required"); }
    if (empty($department)) { array_push($errors, "Department is required");}
    if (empty($post)) { array_push($errors, "Post is required");}
    if (empty($matric_no)) { array_push($errors, "Matric No is required"); }
    if (empty($state_of_origin)) { array_push($errors, "State of origin is required"); }
    if (empty($level)) { array_push($errors, "Level is required"); }
    if (empty($imagee)) { array_push($errors, "Image is required"); }
    if (empty($dob)) { array_push($errors, "D.O.B is required"); }

      // first check the database to make sure 
  // a user does not already exist  
  $user_check_query = "SELECT * FROM gensec1 WHERE matric_no='$matric_no' OR imagee='$imagee' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['matric_no'] === $matric_no) {
      array_push($errors, "User already exists");
    }

    if ($user['imagee'] === $imagee) {
      array_push($errors, "User already exists");
    }
  }
  
  if (count($errors) == 0) {
      $query = "INSERT INTO gensec1 (fullname, department, post, matric_no, state_of_origin, level, imagee, dob) 
      VALUES('$fullname', '$department', '$post', '$matric_no', '$state_of_origin', '$level', '$imagee', '$dob')";
      mysqli_query($db, $query);
      $_SESSION['success'] = "Submitted successfully";
      array_push($errors, "Submitted successfully....");

  }
}


//ADD P.R.O CANDIDATE
if (isset($_POST['add_pro'])) {
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $department = mysqli_real_escape_string($db, $_POST['department']);
  $post = mysqli_real_escape_string($db, $_POST['post']);
  $matric_no = mysqli_real_escape_string($db, $_POST['matric_no']);
  $state_of_origin = mysqli_real_escape_string($db, $_POST['state_of_origin']);
  $level = mysqli_real_escape_string($db, $_POST['level']);
  $imagee = mysqli_real_escape_string($db, $_POST['imagee']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fullname)) { array_push($errors, "Full name is required"); }
  if (empty($department)) { array_push($errors, "Department is required");}
  if (empty($post)) { array_push($errors, "Post is required");}
  if (empty($matric_no)) { array_push($errors, "Matric No is required"); }
  if (empty($state_of_origin)) { array_push($errors, "State of origin is required"); }
  if (empty($level)) { array_push($errors, "Level is required"); }
  if (empty($imagee)) { array_push($errors, "Image is required"); }
  if (empty($dob)) { array_push($errors, "D.O.B is required"); }

    // first check the database to make sure 
// a user does not already exist  
$user_check_query = "SELECT * FROM pro1 WHERE matric_no='$matric_no' OR imagee='$imagee' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) { // if user exists
  if ($user['matric_no'] === $matric_no) {
    array_push($errors, "User already exists");
  }

  if ($user['imagee'] === $imagee) {
    array_push($errors, "User already exists");
  }
}

if (count($errors) == 0) {
    $query = "INSERT INTO pro1 (fullname, department, post, matric_no, state_of_origin, level, imagee, dob) 
    VALUES('$fullname', '$department', '$post', '$matric_no', '$state_of_origin', '$level', '$imagee', '$dob')";
    mysqli_query($db, $query);
    $_SESSION['success'] = "Submitted successfully";
    array_push($errors, "Submitted successfully....");

}
}


//ADD SPORTS DIRECTOR CANDIDATE
if (isset($_POST['add_sports'])) {
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $department = mysqli_real_escape_string($db, $_POST['department']);
  $post = mysqli_real_escape_string($db, $_POST['post']);
  $matric_no = mysqli_real_escape_string($db, $_POST['matric_no']);
  $state_of_origin = mysqli_real_escape_string($db, $_POST['state_of_origin']);
  $level = mysqli_real_escape_string($db, $_POST['level']);
  $imagee = mysqli_real_escape_string($db, $_POST['imagee']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fullname)) { array_push($errors, "Full name is required"); }
  if (empty($department)) { array_push($errors, "Department is required");}
  if (empty($post)) { array_push($errors, "Post is required");}
  if (empty($matric_no)) { array_push($errors, "Matric No is required"); }
  if (empty($state_of_origin)) { array_push($errors, "State of origin is required"); }
  if (empty($level)) { array_push($errors, "Level is required"); }
  if (empty($imagee)) { array_push($errors, "Image is required"); }
  if (empty($dob)) { array_push($errors, "D.O.B is required"); }

    // first check the database to make sure 
// a user does not already exist  
$user_check_query = "SELECT * FROM sports1 WHERE matric_no='$matric_no' OR imagee='$imagee' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) { // if user exists
  if ($user['matric_no'] === $matric_no) {
    array_push($errors, "User already exists");
  }

  if ($user['imagee'] === $imagee) {
    array_push($errors, "User already exists");
  }
}

if (count($errors) == 0) {
    $query = "INSERT INTO sports1 (fullname, department, post, matric_no, state_of_origin, level, imagee, dob) 
    VALUES('$fullname', '$department', '$post', '$matric_no', '$state_of_origin', '$level', '$imagee', '$dob')";
    mysqli_query($db, $query);
    $_SESSION['success'] = "Submitted successfully";
    array_push($errors, "Submitted successfully....");

}
}

// free

// free

//ADD MATRICULATION NUMBER
if (isset($_POST['add_matric'])) {
  $student_matric = mysqli_real_escape_string($db, $_POST['student_matric']);

      // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($student_matric)) { array_push($errors, "Matriculation Number is required"); }

          // first check the database to make sure 
  // a user does not already exist  
  $user_check_query = "SELECT * FROM matric_n WHERE student_matric='$student_matric' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['student_matric'] === $student_matric) {
      array_push($errors, "Matriculation number already exists");
    }
  }

  //register matriculation number if no error is found

  if (count($errors) == 0) {
    $query = "INSERT INTO matric_n (student_matric) 
    VALUES('$student_matric')";
    mysqli_query($db, $query);
    $_SESSION['success'] = "Submitted successfully";
    array_push($errors, "Submitted successfully....");

  }

}

// LOGIN ADMIN
?>