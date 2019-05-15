<?php

session_start();

if($_POST){
    if(isset($_POST['usuario']) and isset($_POST['password'])){
        
        $usuario=$_POST['usuario'];
        $ntienda=$_POST['tienda'];
        
       

        if($usuario and $contraseña ){
            
            $_SESSION['user'] = "$usuario"; 
            $_SESSION['tiend'] = "$ntienda";

            
            header('Location: inicio.php?datos correctos');
            exit();
            
        }else{
            header('Location: ..registro_tienda/.php');
        }
    }

}else{
    header('Location: ../registro_tienda.php');
}