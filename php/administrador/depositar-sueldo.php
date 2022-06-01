<?php
    include('../config.php');
    function depositarSueldo (){
        if(!empty($_POST['monto']) && !empty($_POST['alias'])) {
            $monto = $_POST['monto'];
            $alias = $_POST['alias'];
            $conn=serverConnection();
            session_start();
            $sql="SELECT * FROM cuentas WHERE alias='".$alias."'";
            $result= mysqli_query ($conn,$sql);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                $montoActualizado= $row['saldo'] + $monto; 
                $sql2= "UPDATE `cuentas` SET saldo = '".$montoActualizado."' WHERE id = '".$row['id']."'";
                $result2= mysqli_query ($conn,$sql2);
                if ($result2){
                    return header("Location: ../../vistas/administrador/admin.php");
                } else {
                    $_SESSION['message'] = 'Ocurrió un problema. Intentelo nuevamente.';
                    return header("Location: ../../vistas/administrador/depositar-sueldo.php");
                } 
            } else {
            $_SESSION['message'] = 'No se encuentra la cuenta solicitada.';
                return header("Location: ../../vistas/administrador/depositar-sueldo.php");
            }
            $conn->close();
        }    
    }

    depositarSueldo();
?>