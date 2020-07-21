<?php
	
	// valida se esta logado
	if(!$_SESSION['logado']){
		session_destroy();
		header('Location: login.php');

	}
	// Se logado seleciona a pagina
	else{

		switch ($_GET['pag']) {

			case 'dashboard': include("dashboard.php"); $_SESSION['pag'] ="dashboard"; break;
			case 'cadastrar': include("cadastrar.php"); $_SESSION['pag'] ="cadastrar"; break;
			case 'editar': include("editar.php"); $_SESSION['pag'] ="editar"; break;
			case 'excluir': include("excluir.php"); $_SESSION['pag'] ="excluir"; break;


			default: include("dashboard.php"); $_SESSION['pag'] ="dashboard"; break;
		}
	}	

?>