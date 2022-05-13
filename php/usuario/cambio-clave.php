<?php
    include('../config.php');
    function cambioClave (){
        if(!empty($_POST['newPassword']) && !empty($_POST['repeatedPassword'])) {
            $newPassword=$_POST["newPassword"];
            $conn = serverConnection();
            session_start();
            $user=$_SESSION['logged_username'];
            $id=$_SESSION['logged_userid'];
            $sql= "SELECT * FROM usuarios WHERE nombre_usuario='".$user."' AND id='".$id."'";
            $result= $conn->query ($sql);
            if($result->num_rows > 0)  {
                //Guarda la nueva contraseña y cambio clave pasa a 1
               $sql2="UPDATE usuarios SET clave='".$newPassword."', cambio_clave='1' WHERE id='".$id."'";
               //Redireccionamiento de página
               if ($conn->query ($sql2) == true){
                return header("Location: ../../vistas/usuario/usuario.php");
               } else{
                 return header("Location: ../../vistas/usuario/cambio-clave.php");
               }
            }
        }
        $conn->close();
    }
    cambioClave();
?>