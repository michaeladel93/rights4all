<?php require_once("include/DB.php");?>
<?php 
require_once("include/session.php");
require_once("include/Function.php");
?>
<?php 

$_SESSION["User_id"];
session_destroy();
Redirect_to("Login.php");
?>