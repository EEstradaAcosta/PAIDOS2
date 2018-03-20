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
      <button id="boton2"><a class="btns" href="consultarAlumno.php">Regresar</a></button>
        

      </div>
      
    </div>

    <center><img src="imagenes/logo.jpg" width="300px" height="198px"></center>
    

      <div id="titulo">
    	<h1 class="sombra10">Registrar Alumno</h1>
      </div>
     
      <div id="caja">
       
        <form method="post" action="insertaralumno.php" enctype="multipart/form-data">
        
        
        </p>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 14pt"><b>Matricula:</b></label>
         <input type="text" name="matricula" placeholder="Ingresa Matricula" />
         <br>
         <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 14pt"><b>Nombre:</b></label>
         <input type="text" name="nombre" placeholder="Ingresa Nombre" />
         <br>
         <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 14pt"><b>Correo:</b></label>
         <input type="text" name="correo" placeholder="Ingresa Apellidos" />
         <br>
         <br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 14pt"><b>Contraseña:</b></label>
         <input type="password" name="password"    placeholder="Ingresa Contraseña"/>
          <br>
          <br>
           &nbsp;&nbsp;&nbsp;<label style="font-size: 14pt"><b>Confirmar Contraseña:</b></label>
          <input type="password" name="rpass"   placeholder="Nuevamente la contraseña"/>
          <br>
          <br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 14pt"><b>Genero:</b></label>
         Hombre<input type="radio" name="genero" value="Hombre">
         Mujer<input type="radio" name="genero"  value="Mujer">
         <br>
         <br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 14pt"><b>Edad:</b></label>
         <input type="text" name="edad"  placeholder="Ingresa Edad"/>
         <br>
         <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 14pt"><b>Grado: <select name='grado'> <option value='1'>Primero</option><option value='2'>Segundo</option><option value='3'>Tercero</option></select></label>
         
          <br>
          <br>
           <label style="font-size: 14pt"><b>Grupo:</b></label><select name='grupo'> 
          <option value='a' selected>a</option> <option value='c' selected>c</option> <option value='3sa' selected>3sa</option>  </select>
          
        <br>
       <br>
        <input class="btns" src="escuela/registrar.png" type="image" name="submit" value="Registrarse" width="100px" height="30px">
      
      
        
        
       </form>
       
     </div>
   
    
    

</body>
</html>