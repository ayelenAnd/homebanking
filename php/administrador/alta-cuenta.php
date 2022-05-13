<?php
    include('../config.php');
    function altaCuenta (){
        if(!empty($_POST['nombreCuenta']) && !empty($_POST['alias']) && !empty($_POST['propietario'])) {
            $propietario = $_POST['propietario'];
            $alias = $_POST['alias'];
            $conn=serverConnection();
            session_start();
            $sql="SELECT * FROM usuarios WHERE nombre_usuario='".$propietario."'";
            $result= mysqli_query ($conn,$sql);
            if (mysqli_num_rows($result) === 1) {
                $sql2="SELECT * FROM cuentas WHERE alias='".$alias."'";
                $result2= mysqli_query ($conn,$sql2);
                if (mysqli_num_rows($result2) === 0){
                    $row = mysqli_fetch_assoc($result); 
                    $sql3= "INSERT INTO `cuentas`(id_usuario, nombre, alias, saldo, fecha_hora) VALUES ('". $row['id']."', '".$_POST['nombreCuenta']."', '".$_POST['alias']."', '0', now() )";
                    $result3= mysqli_query ($conn,$sql3);
                    if ($result3){
                        return header("Location: ../../vistas/administrador/admin.php");
                    }
                } else {
                    $_SESSION['message'] = 'Ya existe una cuenta con ese alias.';
                    return header("Location: ../../vistas/administrador/alta-cuenta.php");
                } 
            }else{
                $_SESSION['message'] = 'No se encuentra el usuario ingresado.';
                return header("Location: ../../vistas/administrador/alta-cuenta.php");
            }
            $conn->close();
        }    
    }

    altaCuenta();
?>