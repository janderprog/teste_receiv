<?php

	// inclui classe de banco de dados
	require_once("classes/db.class.php");
	require_once("classes/dashboard.class.php");

	$dash = new Dashboad();

	$tot_titulos = $dash->getTitulos()->tot_titulos;
	$val_titulos = $dash->valorTitulos()->val_titulos;
	$tot_abertos = $dash->getAbertos()->tot_abertos;
	$val_abertos = $dash->valorAbertos()->val_abertos;
	$tot_vencidos = $dash->getVencidos()->tot_vencidos;
	$val_vencidos = $dash->valorVencidos()->val_vencidos;
	$tot_fechados = $dash->getFechados()->tot_fechados;
	$val_fechados = $dash->valorFechados()->val_fechados;

	$clientes[] = $dash->getClientes();

	if(!$clientes){
		$clientes = array();
	}

?>