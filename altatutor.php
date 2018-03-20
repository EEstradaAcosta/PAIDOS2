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
            <button id="boton2"><a class="btns" href="consultamaestro.php">Regresar</a></button>
             

            </div>
            
           
        </div>

          <div id='logo'>
       <center><img src="imagenes/logo.jpg" width="300px" height="198px"></center>
      </div>

      <div id='titulo'>
    	<h2>Registrar Maestro</h2>
      </div>


      <div id="caja">
      
       <form method="post" action="insertartutor.php" >
         <br>
         <br>
        
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 14pt"><b>Nombre:</b></label>
         <input type="text" name="nombre" class="mayuscula" placeholder="Ingresa Nombre" />
         <br>
         <br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 14pt"><b>Correo:</b></label>
         <input type="text" name="correo"   class="mayuscula" placeholder="Ingresa correo"/>
         <br>
         <br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 14pt"><b>Contraseña:</b></label>
         <input type="password" name="password"    placeholder="Ingresa Contraseña"/>
          <br>
          <br>
          <label style="font-size: 14pt"><b>Confirmar Contraseña:</b></label>
          <input type="password" name="rpass"   placeholder="Nuevamente la contraseña"/>
          <br>
     
         <br>
                
          
        <input  src="escuela/registrar.png" type="image" name="submit" value="Registrarse" width="100px" height="50px">
      
        
             
       </form>
       
    </div>
        

</body>
</html>