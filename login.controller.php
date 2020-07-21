<?php
	
	// Inicia a sessão 
	session_start();

	// inclui classe de banco de dados
	require_once("classes/db.class.php");
	require_once("classes/login.class.php");
	
  	// Instacia a Class login
	$login = new Login();

	$login->email = $_POST['email'];
	$login->senha = $_POST['senha'];

	// método Logar
	$res = $login->logar();

	// Valida resultado
	if($res > 0){
		// Seta como logado na sessão
		$_SESSION['logado'] = 1;
		// Seta nome do usuário na sessão
		$_SESSION['usuario'] = $res->nome;
		// Seta id do usuário na sessão
		$_SESSION['id_usuario'] = $res->id;
		// Seta a pagina dashboard
		$_SESSION['pag'] = 'dashboard';
	}else{
		$_SESSION['logado'] = 0;
	}

	header('Location:index.php');


?>