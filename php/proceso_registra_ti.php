<?php
if ($_POST){
    if (isset($_POST['usuario'])&& isset($_POST['password']) && 
    	empty ($_POST['username'])&& empty($_POST['password']) ){

        $usuario=$_POST['usuario'];
        $clave = $_POST['password'];
        $conn = new mysqli('localhost','root','','clase7');

        if($conn -> error){
            echo 'existio un error en la conexion' .$conn->error;
        }else{
            echo 'conexion exitosa';
        }

        $sql_insert = "INSERT INTO user(username, password) VALUES ('$username',MD5('$password'))";

        echo $sql_insert;
        $conn-> query($sql_insert);

        if($conn -> error){
            header('Location: ../1.php?error_message= ocurrio un problema con la conexion');
            exit;
        }else{
            header('Location: ../1.php?error_message= ingreso exitoso');
            exit
        }else
        {
        header('Location: ../1.php');
            exit;  
}
    }
}
