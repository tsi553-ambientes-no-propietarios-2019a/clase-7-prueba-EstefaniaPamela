<?php
session_start();

$conn = new mysqli('localhost','root','','pruebab1');

if($conn->connect_error){
    echo ' error en la conexion';
    exit;
}

?>