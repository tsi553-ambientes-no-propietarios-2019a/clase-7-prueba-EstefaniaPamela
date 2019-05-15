<?php

session_start();
if(isset($_SESSION['user'])){
   
    $nombre=$_SESSION['user'];
	$tienda =$_SESSION['tiend'];
      
    echo "<h1>Hola $nombre</h1><br>";
    echo "<h1>Bienvenido a la tienda $tienda</h1>";

}else{
    header('Location: ../index.php');
}
?>

<html>
<head>
    
</head>
<body>
	<center>
	  <h2>Productos de la tienda</h2>
	<form method="POST" action="PHP/index.php">
                            <p>codigo</p>
                            <p>nombre</p>
                            <p>tipo</p>
                            <p>stock</p>
                            <p>precio</p>
                            
                            <a href="index.php">registrar mi tienda</a>
                        </form>
               </center>

	</body>
	</html>
