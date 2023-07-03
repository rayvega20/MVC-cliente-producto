<?php
	//PASO 3: Crear el programa PHP que enruta.
	
	//Declarar la constante para el controlador predeterminado
	define("CONTROLADOR_DEFAULT", "controllers/inicio.php");
	define("ACCION_DEFAULT","views/inicio/inicio.php");
	define("URL_DEFAULT","http://127.0.0.1/MVC-cliente-producto");

	//Recoger el valor de la variable URL
	$ruta = $_GET["url"];

	//Separa el texto: "producto/editar" => "producto" "editar"
	$ruta = explode("/",$ruta);

	//Generar el controlador
	if(strlen($ruta[0])>0)
	{
		//Recoger el controlador
		$controlador = $ruta[0];
	}else{
		//Establecer el controlador predeterminado
		$controlador = "inicio";
	}

	//Generar la accion
	if(isset($ruta[1]))
	{
		//Recoger  la accion
		$accion = $ruta[1];	
	}else{
		//Establecer la accion predeterminada
		$accion = "inicio";
	}	

	//Imprimir el controlador y la accion
	//--echo "<h1>Controlador: $controlador</h1>";
	//--echo "<h1>Accion: $accion</h1>";

	//Llamar al controlador
	$rutaControlador = "controllers/".$controlador.".php";

	if(file_exists($rutaControlador))
	{
		require_once $rutaControlador;	
	}else{
		require_once CONTROLADOR_DEFAULT;
	}

?>