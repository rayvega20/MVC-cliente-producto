<?php
class Conexion
{
	//Metodo estatico de conexion a la base de datos
	public static function conectarMySql()
	{
		//Parametros de conexion
		$cadena = "mysql:host=127.0.0.1; dbname=bdmarket";
		$usuario = "root";
		$clave =  "";
		//Instanciar un objeto de conexion PDO
		$cnx = new PDO($cadena,$usuario,$clave);
		//Retornar la conexion
		return $cnx;
	}
}

?>