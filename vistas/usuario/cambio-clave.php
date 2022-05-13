<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homebanking</title>
    <script src="../js/actualizacion-password.js"></script>
    <link rel= "stylesheet" href = "../../css/main.css" />
    <link rel= "stylesheet" href = "../../css/cambio-clave.css" />
</head>
<body> 
    <div class = "password-conteiner">
        <h4>Cambio de contraseña</h4>
        <p>Ha iniciado sesión por primera vez. Por favor cambie su contraseña</p>
    <form method="POST" action="../../php/usuario/cambio-clave.php" onsubmit="return validacionPassword(this)"> 
        Contraseña actual <input type="password" name="actualPassword"><br>
        Contraseña nueva <input type="password" name="newPassword"><br>
        Repita la contraseña <input type="password" name="repeatedPassword"><br>
        <button type="submit"> Enviar </button>
        </form>
    </div>
</body>
</html>