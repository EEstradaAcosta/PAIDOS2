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
			<button id="boton2"><a class="btns" href="consultaGrupos.php">Regresar</a></button>
			 

			</div>
			
		</div>
 <div id='logo'>
			 <center><img src="imagenes/logo.jpg" width="300px" height="198px"></center>
			</div>
		<div id="titulo">
		<h2>LISTA DE GRUPOS</h2>
		</div>
		<br>
<div id='llenado'>


<center><table id='tabla' cellspacing='5'>
							<tr  align='center'>
                                                
      							<th>NOMBRE DEL GRUPO</th>
      							<th>MAESTRO</th>
      							<th>MATERIA</th>
      							<th colspan='2'>MOVIMIENTOS</th>
      						</tr>

					

														<tr bgcolor='#F5F6CE' align='center'>
                                                      
									                  <td>c</td>
                                                      <td>Manuel Perez</td>
                                                      <td>Fisica</td>
                                                      
      								
      								<td> <a href='borrargrupo.php?id=c&accion=borrar'><img src='escuela/Equis_roja.png' width=30 height=15></a> </td>
					                 <td> <a href='editargrupo.php?id=c&action=editar'><img src='escuela/lapiz.jpg'width=30 height=15></a> </td>
      							</tr>
														<tr bgcolor='#F5F6CE' align='center'>
                                                      
									                  <td>a</td>
                                                      <td>Geovanni Mezquita</td>
                                                      <td>EspaÃ±ol</td>
                                                      
      								
      								<td> <a href='borrargrupo.php?id=a&accion=borrar'><img src='escuela/Equis_roja.png' width=30 height=15></a> </td>
					                 <td> <a href='editargrupo.php?id=a&action=editar'><img src='escuela/lapiz.jpg'width=30 height=15></a> </td>
      							</tr>
														<tr bgcolor='#F5F6CE' align='center'>
                                                      
									                  <td>3sa</td>
                                                      <td>daniel</td>
                                                      <td>fisica cuantica</td>
                                                      
      								
      								<td> <a href='borrargrupo.php?id=3sa&accion=borrar'><img src='escuela/Equis_roja.png' width=30 height=15></a> </td>
					                 <td> <a href='editargrupo.php?id=3sa&action=editar'><img src='escuela/lapiz.jpg'width=30 height=15></a> </td>
      							</tr>
						
						</table></center>


</div>

	</body>
</html>
