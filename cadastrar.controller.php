<?php

	// inclui classe de banco de dados
	require_once("classes/db.class.php");
	require_once("classes/dashboard.class.php");

	$dash = new Dashboad();

	$dash->nome 			= $_POST['nome'];
	$dash->cpf_cnpj 		= $_POST['cpf_cnpj'];
	$dash->data_nascimento 	= date('Y-m-d', strtotime($_POST['nasc']));;
	$dash->endereco 		= $_POST['endereco'];
	$dash->numero 			= $_POST['numero'];
	$dash->complemento 		= $_POST['complemento'];
	$dash->bairro 			= $_POST['bairro'];
	$dash->cidade 			= $_POST['cidade'];
	$dash->estado			= $_POST['estado'];
	$dash->descricao_titulo = $_POST['titulo'];
	$dash->valor 			= $_POST['valor'];
	$dash->data_vencimento 	= date('Y-m-d', strtotime($_POST['vencimento']));
	$dash->pago 			= 0;
	$dash->alterado 		= date('Y-m-d H:i:s');

	if($dash->salvar()){
		header('location:main.php?pag=dashboard');
	}


?>