<!DOCTYPE html>
<html>
	<head>
	<title></title>

	<meta charset="utf-8">
	<link rel="stylesheet" href="consulta.css" type="text/css" />
</head>
	<body>
		<div id="barra">
			
			<div id="botones1">
				<button id="boton1"><a class="btns" href="inicio.php">cerrar sesion</a></button>
			<button id="boton2"><a class="btns" href="consultaMateria.php">Regresar</a></button>
			  

			</div>
			
		</div>

		<div id='logo'>
			 <center><img src="imagenes/logo.jpg" width="300px" height="198px"></center>
			</div>
<div id="caja">
	<div id="formulario" class="forma">

			<h2>Alta Materia</h2>
				<form method="post" action="insertarmateria.php" >
					Nombre de Materia: &nbsp;
					   <input name="nombre" type="text" size="50"><br><br>
					
					<input type="submit" name="enviar" value="Enviar Datos">
				</form>	
		</div>	

</div>
		
	</body>
</html>