<?php
	header("Access-Control-Allow-Origin:*");
	session_start();
	if(isset($_GET['code']))
	{
		$codeNo=$_GET['code'];
		$_SESSION['code']=$codeNo;
	}
	
	if($_SESSION['code']!='564646765')
	{
		exit();
	}

	include_once("controller/Controller.php");
	$controller = new Controller();
	$controller->invoke();
?>