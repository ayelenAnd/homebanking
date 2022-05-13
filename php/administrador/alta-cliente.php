<?php
    include('../config.php');
    function usuarioUnico (){
        if(!empty($_POST['user']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['dni'])) {
            $user = $_POST['user'];
            $conn=serverConnection();
            session_start();
            $sql="SELECT * FROM usuarios WHERE nombre_usuario='".$user."'";
            $result= $conn->query ($sql);
            if ($result->num_rows === 0)  {
                $sql2= "INSERT INTO usuarios(nombre, apellido, nombre_usuario, clave, dni, tipo, cambio_clave) VALUES ('".$_POST['name']."', '".$_POST['lastname']."', '".$_POST['user']."', '".$_POST['password']."', '".$_POST['dni']."', 'comun', '0')";
                if ($conn->query ($sql2) == true){
                    return header("Location: ../../vistas/administrador/admin.php");
                } 
            }else{
                $_SESSION['message'] = 'El nombre de usuario ya se encuentra registrado en la base.';
                return header("Location: ../../vistas/administrador/alta-cliente.php");
            }
            $conn->close();
        }    
    }

    usuarioUnico();
?>