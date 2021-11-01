<?php
session_start();
$login = "";

$errors = array();

$_SESSION['login']=="";
session_unset();
$_SESSION['action1']="You have logged out successfully..!";
?>
<script language="javascript">
document.location="login.php";
</script>
