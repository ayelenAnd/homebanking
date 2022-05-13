<?php 
    include('config.php');
    
    function searchUser (){
      if(!empty($_POST['user']) && !empty($_POST['password'])) {
        $user=$_POST["user"];
        $pass=$_POST["password"];
    
        $conn = serverConnection();
        $sql="SELECT * FROM usuarios WHERE nombre_usuario='".$user."' AND clave='".$pass."'";
        $result= $conn->query ($sql);
        if($result->num_rows > 0)  {
          $row = $result->fetch_assoc();  
          $dbuserid=$row['id'];
          $dbusername=$row['nombre_usuario'];
          $dbtype=$row['tipo'];
          $dbchangepassword=$row['cambio_clave'];
        
        //Almacena en la variable global $_SESSION datos relevantes de la persona logueada
          session_start();
          $_SESSION['logged_userid']=$dbuserid;
          $_SESSION['logged_username']=$dbusername;
          $_SESSION['logged_usertype']=$dbtype;
          $_SESSION['logged_userchpassword']=$dbchangepassword;
    
          /* Redireccionamiento de página */
         /*Si el tipo es empleado es administrador*/
         /*Si el tipo es comun es usuario*/
        if ($dbtype == 'empleado'){
          return header("Location: ../vistas/administrador/admin.php");
        } else{
          /*Si no cambió la contraseña el valor es 0 falso*/
          /*Si cambió la contraseña es 1 es verdadero*/
          if ($dbchangepassword == 0){
            return header("Location: ../vistas/usuario/cambio-clave.php");
          } else {
            return header("Location: ../vistas/usuario/usuario.php");
          }
        } 
      }
    }
    $conn->close();
  }
searchUser();
?>