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
          <button id="boton2"><a class="btns" href="consultaGrupos.php">Regresar</a></button>
           

      </div>
			
		</div>
			
           <center><img src="imagenes/logo.jpg" width="300px" height="198px"></center>
         

			<div id="titulo">
    	<h2>Registrar Grupo</h2>
      </div>
      <div id="caja">

       
       <form method="post" action="insertargrupo.php" >
         <br>
         <br>
        
         <label style="font-size: 14pt"><b>Nombre del Grupo:</b></label>
         <input type="text" name="nombre" class="mayuscula" placeholder="Ingresa Nombre" />
         <br>
         <br>
         <br>
          &nbsp;&nbsp;&nbsp;<label style="font-size: 14pt" ><b>Maestro:</b></label><select name='maestro'> 
          <option value='Geovanni Mezquita' selected>Geovanni Mezquita</option> <option value='Manuel Perez' selected>Manuel Perez</option> <option value='Mario Moreno' selected>Mario Moreno</option> <option value='daniel' selected>daniel</option> <option value='Juan Ramirez' selected>Juan Ramirez</option>  </select>
         <br>
         <br>
         <br>
         &nbsp;&nbsp; <label style="font-size: 14pt"><b>Materia:</b></label><select name='materia'> 
          <option value='Ecuaciones' selected>Ecuaciones</option> <option value='EspaÃ±ol' selected>EspaÃ±ol</option> <option value='Fisica' selected>Fisica</option> <option value='fisica cuantica' selected>fisica cuantica</option> <option value='Ingles Avanzado' selected>Ingles Avanzado</option>  </select>
         <br>
         <br>
         <br>
         <br>
         <br>
              
          
        <input class="btns"  src="escuela/registrar.png" type="image" name="submit" value="Registrarse" width="100px" height="50px">
      
        
             
       </form>
       
    </div>
	</body>
</html>