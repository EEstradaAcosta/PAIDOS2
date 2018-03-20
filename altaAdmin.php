<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="consulta.css" type="text/css" />
	<link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
</head>
<body>
  
        <div id="barra">
            
            <div id="botones1">
              
              <button id="boton1"><a class="btns" href="inicio.php">cerrar sesion</a></button>
            <button id="boton2"><a class="btns" href="consultaAdmin.php">Regresar</a></button>
            </div>
            
            
        </div>

        
       <center><img src="imagenes/logo.jpg" width="300px" height="198px"></center>
     
<div id="caja">
  
    <div id="titulo">
      <h2>REGISTRAR ADMINISTRADOR</h2>
      </div>

      <div id='llenado'>

       
       <form method="post" action="insertaradmin.php" >
         <br>
         <br>
        
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 14pt"><b>Nombre:</b></label>
         <input type="text" name="nombre" class="mayuscula" placeholder="Ingresa Nombre" />
         <br>
         <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 14pt"><b>Correo:</b></label>
         <input type="text" name="correo"   class="mayuscula" placeholder="Ingresa correo"/>
         <br>
         <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 14pt"><b><b>Contraseña:</b></label>
         <input type="password" name="password"    placeholder="Ingresa Contraseña"/>
          <br>
          <br>
          <label style="font-size: 14pt"><b>Confirmar Contraseña:</b></label>
          <input type="password" name="rpass"   placeholder="Nuevamente la contraseña"/>
          <br>
     
         <br>
                
          
         <input class="btns" src="escuela/registrar.png" type="image" name="submit" value="Registrarse" width="100px" height="50px">
      
        
             
       </form>
       
    </div>



</div>
      
        

</body>
</html>