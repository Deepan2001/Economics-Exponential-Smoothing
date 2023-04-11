<?php
session_start();
require_once 'common.php';
$user = new USER();
session_start();
 if(isset($_SESSION["userSession"])){
	  session_unset();
// Destroying session
session_destroy();
	header( "Location:index.php");
 }
if($user->is_logged_in()!="")
{
	$_SESSION[ 'userSession' ];
	session_unset();
	$user->logout();	
	$user->redirect('index.php');
}
?>