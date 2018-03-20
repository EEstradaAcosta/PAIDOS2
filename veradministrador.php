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
			<button id="boton2"><a class="btns" href="consultaAdmin.php">Regresar</a></button>

			</div>
			
			
		</div>

		<div id='logo'>
			 <center><img src="imagenes/logo.jpg" width="300px" height="198px"></center>
			</div>
		<div id='titulo'>
		<h1>LISTA DE ADMNISTRADORES</h1>
		</div>
		<br>

<div id='llenado'>
<center><table id='tabla' cellspacing='5'>
							<tr  align='center'>
                                                
      							<th>NOMBRE</th>
      							<th>CORREO</th>
      							<th colspan='2'>MOVIMIENTOS</th>
      						</tr>

					

														<tr bgcolor='#F5F6CE' align='center'>
                                                      
									                  <td>Karime Lopez</td>
                                                      <td>karimelopez@hotmail.com</td>
                                                      
      								

      								 <td> <a href='borraradministrador.php?id=6&accion=borrar'><img src='escuela/Equis_roja.png' width=30 height=15></a> </td>
					                 <td> <a href='editaradministrador.php?id=6&action=editar'><img src='escuela/lapiz.jpg'width=30 height=15></a> </td>
      							</tr>
														<tr bgcolor='#F5F6CE' align='center'>
                                                      
									                  <td>Oscar</td>
                                                      <td>prueba@hotmail.com</td>
                                                      
      								

      								 <td> <a href='borraradministrador.php?id=3&accion=borrar'><img src='escuela/Equis_roja.png' width=30 height=15></a> </td>
					                 <td> <a href='editaradministrador.php?id=3&action=editar'><img src='escuela/lapiz.jpg'width=30 height=15></a> </td>
      							</tr>
														<tr bgcolor='#F5F6CE' align='center'>
                                                      
									                  <td>Administrador</td>
                                                      <td>administrador@hotmail.com</td>
                                                      
      								

      								 <td> <a href='borraradministrador.php?id=2&accion=borrar'><img src='escuela/Equis_roja.png' width=30 height=15></a> </td>
					                 <td> <a href='editaradministrador.php?id=2&action=editar'><img src='escuela/lapiz.jpg'width=30 height=15></a> </td>
      							</tr>
						
						</table></center>


</div>

	</body>
</html>