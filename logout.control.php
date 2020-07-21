<?php
	session_start();

	// Inclui a Classe Login
	require_once("classes/db.class.php");
	require_once("classes/login.class.php");

	// Instância a class Login
	$logout = new Login();

	// Chama o método deslogar
	$sair = $logout->deslogar();
	
	if($sair){
		// direciona para index
		header('Location:index.php');
	}

?>