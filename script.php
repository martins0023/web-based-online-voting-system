<?php
    require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}

	$loginURL = $gClient->createAuthUrl();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <title>Login With Google</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<style>
body{
font-family: calibri;
}
.form_container {
    border: 1px solid rgba(0, 0, 0, .05);
    box-shadow: 15px 26px 30px rgba(0, 0, 0, .09);
    border-left: 1px solid rgba(0, 0, 0, .06);
border-radius: 4px;
max-width: 500px;
padding: 20px 30px 30px;
text-align: center;
margin:0 auto;
}
.sanhead { font-size: 20px; }
.san { padding:20px; }
.error_message {
color: #b12d2d;
text-align: center;
background-color: #ffd9d9;
}
.message {
width: 100%;
max-width: 300px;
padding: 10px 30px;
border-radius: 4px;
margin: 0 auto;
margin-bottom: 5px;    
text-align: center;
}
.inputclass{
border: #CCC 1px solid;
padding: 10px 20px;
border-radius:4px;
}
.submit_button {
padding: 10px 20px;
background: #a9961e;
border: #736615 1px solid;
color: #FFF;
border-radius:4px;
}
</style>
<body>
    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3" align="center">

            <div class="form_container">

<div class="sanhead"><strong>Continue</strong> </div>
<form class="center" image-backgorund="images/banner.jpg">
                    <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Google" class="btn btn-danger">
                </form>


</div>

               

            </div>
        </div>
    </div>
</body>
</html>