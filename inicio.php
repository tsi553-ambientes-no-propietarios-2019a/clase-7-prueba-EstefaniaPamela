<?php

$sql_extraer= "Select * from producto";

$result = mysqli_query($conn,$sql_extraer);
$user = $_POST['nombreusuario'];

$sql_extraernombretienda ="Select nomtienda from tienda
WHERE nomuser ='$user'";
$resulta = mysqli_query($conn,$sql_extraernombretienda);

?>


<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>PRODUCTOS DISPONIBLES</h1>
    <?php echo '<h2>Bienvenido ' .strtoupper($user),'</h2>';

    while($fila = mysqli_fetch_array($resulta)){
     echo '<h2> A la Tienda: ',$fila['nomtienda'],'</h2>'; 
    } ?>
    <table border="2px">
    <tr>

  <th>CODIGO</th>
  <th>NOMBRE/th>
  <th>TIPO</th>
  <th>STOCK</th>
  <th>PRECIO</th>


</tr>
<tr>
<?php
while($fila = mysqli_fetch_array($result)){?>
    <tr>
    <td> <?php echo $fila['codigo_Pro']; ?></td>
    <td> <?php echo $fila['nombPro']; ?> </td> 
    <td> <?php echo $fila['tipoPro']; ?></td> 
    <td> <?php echo $fila['cantidadPro']; ?></td>
    <td> <?php echo $fila['precioPro']; ?></td>
    </br>
    </tr>
    
<?php } ?>
</tr>
    </table>
    <a href="productos.php">Registrar Productos</a>
</body>
</html>