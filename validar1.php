<?php
include('global.php');

if($_POST){
    if(isset($_POST['nombresuario']) && isset($_POST['password']) && 
    !empty($_POST['nombresuario']) && !empty($_POST['password'])){
        
       $user= $_POST['nombresuario'];
       $password = $_POST['password'];

       $sql_extraer = "SELECT * FROM tienda
       WHERE nomuser = '$user' 
       AND password = MD5('$password')";

       $res = $conn->query($sql_extraer);

       if($conn->error){
        redirect('index.php?error_message=Ocurrió un error: ' . $conn->error);
       }

       if($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $_SESSION['usuarios'] = [
                'nombresuario' => $row['nomuser'],
                'id' => $row['id']
            ];

            include('inicio.php');
        }
        } else {
            
            echo '<h2></br> datos incorrectos </h2>';
            include('index.php');
            
        }
        
    }else{
        echo 'llene todos los datos por favor';
        include('index.php');
    }
}

?>