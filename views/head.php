<!DOCTYPE html>
<!-- Cabecera de la Vista  -->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mi Aplicacion</title>
	<style type="text/css">
		#head {
			background-color: skyblue;
		}
		#foot {
			background-color: yellow;	
		}
	</style>
</head>
<body>
	<div id="head">
	<h2>Sistema de Ventas</h2>
	<a href="<?php echo URL_DEFAULT ?>/inicio">Inicio</a>
	<a href="<?php echo URL_DEFAULT ?>/producto">Producto</a>
	<a href="<?php echo URL_DEFAULT ?>/cliente">Cliente</a>
	<a href="<?php echo URL_DEFAULT ?>/venta">Ventas</a>
	<a href="<?php echo URL_DEFAULT ?>/usuario">Usuarios</a>
	</div>
<hr>