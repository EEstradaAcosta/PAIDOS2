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
			<button id="boton2"><a class="btns" href="consultaMaestro.php">Regresar</a></button>
			 

			</div>
			
		</div>
		 <div id='logo'>
			 <center><img src="imagenes/logo.jpg" width="300px" height="198px"></center>
			</div>

		<div id='titulo'>
		<h1 class="sombra12">LISTA DE MAESTROS</h1>
		</div>
		<br>
<div id='llenado'>

<center><table id='tabla' cellspacing='5'>
							<tr align='center'>
                                                
      							<th>NOMBRE</th>
      							<th>CORREO</th>
      							
      						    <th colspan='2'>MOVIMIENTOS</th>
      							
      							
      						</tr>

					

														<tr bgcolor='#F5F6CE' align='center'>
                                                      
									                  <td>Mario Moreno</td>
                                                      <td>mario@hotmail.com</td>
                                                      
      								

      								 <td> <a href='borrar_maestro.php?id=Mario Moreno&accion=borrar'><img src='escuela/Equis_roja.png' width=30 height=15></a> </td>
					                 <td> <a href='editartutor.php?id=Mario Moreno&action=editar'><img src='escuela/lapiz.jpg'width=30 height=15></a> </td>
      							</tr>
														<tr bgcolor='#F5F6CE' align='center'>
                                                      
									                  <td>Manuel Perez</td>
                                                      <td>manuel@hotmail.com</td>
                                                      
      								

      								 <td> <a href='borrar_maestro.php?id=Manuel Perez&accion=borrar'><img src='escuela/Equis_roja.png' width=30 height=15></a> </td>
					                 <td> <a href='editartutor.php?id=Manuel Perez&action=editar'><img src='escuela/lapiz.jpg'width=30 height=15></a> </td>
      							</tr>
														<tr bgcolor='#F5F6CE' align='center'>
                                                      
									                  <td>Juan Ramirez</td>
                                                      <td>ramirez@hotmail.com</td>
                                                      
      								

      								 <td> <a href='borrar_maestro.php?id=Juan Ramirez&accion=borrar'><img src='escuela/Equis_roja.png' width=30 height=15></a> </td>
					                 <td> <a href='editartutor.php?id=Juan Ramirez&action=editar'><img src='escuela/lapiz.jpg'width=30 height=15></a> </td>
      							</tr>
														<tr bgcolor='#F5F6CE' align='center'>
                                                      
									                  <td>Geovanni Mezquita</td>
                                                      <td>geovanni@hotmail.com</td>
                                                      
      								

      								 <td> <a href='borrar_maestro.php?id=Geovanni Mezquita&accion=borrar'><img src='escuela/Equis_roja.png' width=30 height=15></a> </td>
					                 <td> <a href='editartutor.php?id=Geovanni Mezquita&action=editar'><img src='escuela/lapiz.jpg'width=30 height=15></a> </td>
      							</tr>
														<tr bgcolor='#F5F6CE' align='center'>
                                                      
									                  <td>daniel</td>
                                                      <td>daniel@hotmail.com</td>
                                                      
      								

      								 <td> <a href='borrar_maestro.php?id=daniel&accion=borrar'><img src='escuela/Equis_roja.png' width=30 height=15></a> </td>
					                 <td> <a href='editartutor.php?id=daniel&action=editar'><img src='escuela/lapiz.jpg'width=30 height=15></a> </td>
      							</tr>
						
						</table></center>

</div>


	</body>
</html>
