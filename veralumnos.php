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
				<button id="boton1"><a class="btns" href="inicio.php">Cerrar Sesion</a></button>
			<button id="boton2"><a class="btns" href="consultarAlumno.php">Regresar</a></button>
			  

			</div>
			
			
		</div>
			<div id='logo'>
			 <center><img src="imagenes/logo.jpg" width="300px" height="198px"></center>
			</div>

		<div id='titulo'>
		<h1 class="sombra12">LISTA DE ALUMNOS</h2>
		</div>
		<br>

<div id='alumnos'>
<center><table id='tabla' cellspacing='5'>
							<tr  align='center'>
                                                
      							<th>MATRICULA</th>
      							<th>NOMBRE</th>
      							<th>CORREO</th>
      							<th>GENERO</th>
      							<th>EDAD</th>
      							<th>GRADO</th>
      							<th>GRUPO</th>
      							<th colspan='2'>MOVIMIENTOS</th>
      						</tr>

					

														<tr bgcolor='#F5F6CE' align='center'>
                                                      
									                  <td>E13080827</td>
                                                      <td>Emilio Perez</td>
                                                      <td>emlioperez@hotmail.com</td>
                                                      <td>Hombre</td>
                                                      <td>27</td>
                                                      <td>1</td>
                                                      <td>3sa</td>
                                                      
      								
      								<td> <a href='borraralumno.php?id=E13080827&accion=borrar'><img src='escuela/Equis_roja.png' width=30 height=15></a> </td>
					                 <td> <a href='editaralumno.php?id=E13080827&action=editar'><img src='escuela/lapiz.jpg'width=30 height=15></a> </td>
      							</tr>
														<tr bgcolor='#F5F6CE' align='center'>
                                                      
									                  <td>E12080255</td>
                                                      <td>Perla </td>
                                                      <td>perla@hotmail.com</td>
                                                      <td>Mujer</td>
                                                      <td>12</td>
                                                      <td>1</td>
                                                      <td>c</td>
                                                      
      								
      								<td> <a href='borraralumno.php?id=E12080255&accion=borrar'><img src='escuela/Equis_roja.png' width=30 height=15></a> </td>
					                 <td> <a href='editaralumno.php?id=E12080255&action=editar'><img src='escuela/lapiz.jpg'width=30 height=15></a> </td>
      							</tr>
														<tr bgcolor='#F5F6CE' align='center'>
                                                      
									                  <td>1234</td>
                                                      <td>jimenez</td>
                                                      <td>jimenez@hotmail.com</td>
                                                      <td>Hombre</td>
                                                      <td>30</td>
                                                      <td>1</td>
                                                      <td>3sa</td>
                                                      
      								
      								<td> <a href='borraralumno.php?id=1234&accion=borrar'><img src='escuela/Equis_roja.png' width=30 height=15></a> </td>
					                 <td> <a href='editaralumno.php?id=1234&action=editar'><img src='escuela/lapiz.jpg'width=30 height=15></a> </td>
      							</tr>
														<tr bgcolor='#F5F6CE' align='center'>
                                                      
									                  <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td>0</td>
                                                      <td>0</td>
                                                      <td></td>
                                                      
      								
      								<td> <a href='borraralumno.php?id=&accion=borrar'><img src='escuela/Equis_roja.png' width=30 height=15></a> </td>
					                 <td> <a href='editaralumno.php?id=&action=editar'><img src='escuela/lapiz.jpg'width=30 height=15></a> </td>
      							</tr>
						
						</table></center>
</div>



	</body>
</html>
