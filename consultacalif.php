
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
			<button id="boton2"><a class="btns" href="indexalumno.php">Regresar</a></button>
			

			</div>
			
		</div>

		<div id='logo'>
			 <center><img src="imagenes/logo.jpg" width="300px" height="198px"></center>
			</div>

		<div id="caja">
			<div id='confirma'>
	<br>
	<br>
	<br>
        <form method="post" action="vercalificaciones.php" >
        <label style="font-size: 14pt; color: #FFFFFF;"><b>Confirmar Matricula:</b></label>
         <input type="text" name="matricula"   placeholder="Matricula"/>
         <br>
         <br>
         <center><input class="btns" src="escuela/registrar.png" type="image" name="submit" value="Registrarse" width="100px" height="50px"></center> 
          </form>
     </div>

		</div>
	

	</body>
</html>