<?php
	require('loginserver.php');
  error_reporting(0);

	session_start();
	//If your session isn't valid, it returns you to the login screen for protection
	
?>

<html>
<head>
<script>
alert("confirm your identity to continue...");
</script>


<script>
function promptForClose() {
  var the_answer = confirm("This window has been inactive for some seconds. ");

  if(the_answer == true) {
    window.location = "login.php";

    }
    else if(the_answer == false) {
      window.location = "login.php";
    
  } else {
    setTimeout('promptForClose()', 10000);
  }
}

function definitelyClose() {
  top.opener = self;
  top.window.close();
}

</script>
<?php require("servermatric.php");?>


<title>
block confirm 
</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="jquery" href="jquery/jquery.backtop.js"/>
    <link rel="jquery" href="jquery/jquery.min.js"/>
    <link rel="jquery" href="jquery/jquery.mobile.custom.js"/>
    <link rel="jquery" href="jquery/jquery.mobile.custom.min.js"/>
    <link rel="jquery" href="jquery/jquery.mobile.custom.structure.css"/>
    <link rel="jquery" href="jquery/jquery.mobile.custom.structure.min.css"/>
    <link rel="jquery" href="jquery/jquery.mobile.custom.theme.css"/>
    <link rel="jquery" href="jquery/jquery.mobile.custom.theme.min.css"/>
    <link rel="jquery" href="jquery/jquery.mobilemenu.js"/>
    <link rel="jquery" href="jquery/jquery.placeholder.min.js"/>


    <link rel="stylesheet" href="jquery/jquery.backtop.js"/>
    <link rel="stylesheet" href="jquery/jquery.min.js"/>
    <link rel="stylesheet" href="jquery/jquery.mobile.custom.js"/>
    <link rel="stylesheet" href="jquery/jquery.mobile.custom.min.js"/>
    <link rel="stylesheet" href="jquery/jquery.mobile.custom.structure.css"/>
    <link rel="stylesheet" href="jquery/jquery.mobile.custom.structure.min.css"/>
    <link rel="stylesheet" href="jquery/jquery.mobile.custom.theme.css"/>
    <link rel="stylesheet" href="jquery/jquery.mobile.custom.theme.min.css"/>
    <link rel="stylesheet" href="jquery/jquery.mobilemenu.js"/>
    <link rel="stylesheet" href="jquery/jquery.placeholder.min.js"/>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="logstyle.css" rel="stylesheet" type="text/css" media="all">
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<!-- <link href="css/user_styles.css" rel="stylesheet" type="text/css" /> -->

</head>
<body onload="setTimeout('promptForClose()',30000);" style="background-image:url('images/ho5.jpg');">

<div class="header">
  	<h2>Verify Matriculation Number</h2>
  </div>
  
  <div >
  <center>
    <h2 style="color:white">
    
    Making sure you are secured is all that matters to us </br>(your annonymity).
    </h2>
  </center>
</div>

<div>
<section>
<form method="post" action="justvoteblock.php" onSubmit="return loginValidate(this)">
<?php include('errors.php'); ?>
<div class="input-group">
  	  <label>Please enter your 'MATRICULATION NUMBER' to continue to check the vote result...</label>
  	  <input type="text" name="student_matric">
  	</div>

    <div class="input-group">
  	  <button type="submit" class="btn" name="validate_user">continue</button>
  	</div>

</form>
</section>

</div>

</body>

</html>