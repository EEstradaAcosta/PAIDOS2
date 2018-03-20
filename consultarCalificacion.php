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
            <button id="boton2"><a class="btns" href="indexmaestro.php">Regresar</a></button>
            

            </div>
			
		</div>
		

            <div id='logo'>
             <center><img src="fondo/logo.png" width="300px" height="198px"></center>
            </div>

            <div id="titulo">
            <h2>Calificaciones</h2>
        </div>

<div id="caja">
    
    <div id="formulario">

                <form method="post" action="insertarcalificacion.php" >
                    &nbsp;&nbsp;&nbsp;&nbsp;<label style='font-size: 14pt'><b>Alumno:</b></label><select name='alumno'> 
           </select>
        <br>
        <br>
        <label style='font-size: 14pt'><b>Materia:</b></label><select name='materia'> 
           </select>
        <br>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style='font-size: 14pt'><b>Calificacion:</b>
          <b><input type="text" name="calificacion" id="">
        <br>
        <br>
                    <input type="submit" name="enviar" value="Enviar Datos">
                </form> 
        </div>

</div>
			
	</body>
</html>