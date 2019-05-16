<?php
include('global.php');

if ($_POST) {
    if(isset($_POST['cod']) && isset($_POST['nompro']) && isset($_POST['tipo']) && isset($_POST['cant']) && isset($_POST['precio']) &&
    !empty($_POST['codigo']) && !empty($_POST['nompro']) && !empty($_POST['tipo']) && !empty($_POST['cant']) && !empty($_POST['precio'])){

        $codigo = $_POST['cod'];
        $nombre = $_POST['nompro'];
        $tipo = $_POST['tipo'];
        $cantidad = $_POST['cant'];
        $precio = $_POST['precio'];
        

            $sql_insert = "INSERT INTO producto
            (codpro, nompro, tipopro, cantpro, preciopro)
            VALUES ('$codigo','$nombre','$tipo','$cantidad','$precio')";

            $conn->query($sql_insert);

            if($conn->error){
                echo 'error al registrar los datos' .$conn->error;
            exit;
            }else{
                echo '</br>REGISTRO EXITOSO ',$_POST['nombreusuario'];
             
                include('inicio.php');
            }
    }
}else{
    echo 'los datos incompletos';
}