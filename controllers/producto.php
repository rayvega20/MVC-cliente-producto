<?php
	

	//Incluir la Cabecera
	require_once "views/head.php";


	//Incluir el Cuerpo
	$rutaVista = "views/".$controlador."/".$accion.".php";

	if(file_exists($rutaVista))
	{
		require_once $rutaVista;	
	}else{
		require_once ACCION_DEFAULT;
	}


	//Incluir el pie
	require_once "views/foot.php";
	
?>