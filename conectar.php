<?php
//	$link =mysqli_connect("localhost","root","","academia");
//	if($link){
//		mysqli_select_db("academia",$link);

	$conexion = new mysqli("localhost", "root", "", "academia");

//para comprobar la conexion
//Para comprobar la conexion
	if ($conexion -> connect_errno)
	{
	printf("Conexion fallida:", $conexion->connect_error); //imprime el error de conexion
	}

//	}
?>