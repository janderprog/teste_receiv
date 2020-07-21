<?php
	
	require_once("classes/db.class.php");
	require_once("classes/dashboard.class.php");

	$obj = new Dashboad();

	$obj->id = $_GET['id'];
	
	$obj->excluir();
	
	header('location:main.php?pag=dashboard');
	
?>