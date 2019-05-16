<?php
include('global.php');

if ($_POST) {
    if(isset($_POST['nomtienda']) && isset($_POST['nombresuario'])
        && isset($_POST['password']) && isset($_POST['checkPass']) &&
    !empty($_POST['nombretienda']) && !empty($_POST['nombreusuario']) && 
    !empty($_POST['password']) && !empty($_POST['checkPass'])){

        $nomtienda=$_POST['nombretienda'];
        $user= $_POST['nombreusuario'];
        $clave= MD5($_POST['password']);
        $checkClave= MD5($_POST['checkPass']);
       
        if($clave===$checkClave){
            

            $sql_insert = "INSERT INTO tienda
            (nomtienda, nomuser, password)
            VALUES ('$nomtienda','$user','$clave')";

            $conn->query($sql_insert);

            if($conn->error){
                echo 'error al registrar los datos' .$conn->error;
            exit;
            }else{
                echo '</br>REGISTRO EXITOSO';
                include('index.php');
            }

        }else{
            include('registro_tienda.php');
            echo '<h2>contraseña incorrecta</h2>';
        
        }
    }
}else{
    echo 'datos incompletos';
}

?>