<?php
    include('../../php/config.php');
    $conn = serverConnection();
    session_start();
    if ($_SESSION['message'] !== '') {
        echo $_SESSION['message'];
        $_SESSION['message'] = '';
    }
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta cliente</title>
    <script src="../../js/alta-cliente.js"></script>
    <link rel= "stylesheet" href = "../../css/main.css" />
    <link rel= "stylesheet" href = "../../css/alta-cliente.css" />
</head>
<body>
    <div class = "alta-conteiner">
        <form method= "POST" action="../../php/administrador/alta-cliente.php" onsubmit="return validacionAlta(this)">
            Nombre <input type="text" name="name" required><br>
            Apellido <input type="text" name="lastname" required><br>
            DNI <input type="text" name="dni"><br>
            Nombre de usuario  <input type="text" name="user"><br>
            Clave <input type="password" name="password"><br>
            <button type="submit"> Enviar </button>
        </form>
    </div>
</body>
</html>