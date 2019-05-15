<?php

session_start();
if(isset($_SESSION['user'])){
   
    $nombre=$_SESSION['user']; 
}else{
    header('Location: ../inicio.php');
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PRUEBA</title> 
</head>
<body>
	<center>
	  <h2>INICIAR SESION</h2>
	<form method="POST" action="PHP/inicio.php">
                             <input type="text"  name="usuario" placeholder="usuario">
                               <br>
                               <br>
                               <input type="password"  name="password" placeholder="contraseña">
                               <br>
                               <br>
                                <input type="submit"  value="INICIAR">
                                <br>
                               <br>
                                <a href="registro_tienda.php">registrar mi tienda</a>
                        </form>
               </center>ss

	</body>
	</html>