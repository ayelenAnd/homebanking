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
    <script src="../../js/alta-cuenta.js"></script>
    <link rel= "stylesheet" href = "../../css/main.css" />
    <link rel= "stylesheet" href = "../../css/alta-cliente.css" />
</head>
<body>
    <div class = "alta-conteiner">
        <form method= "POST" action="../../php/administrador/alta-cuenta.php" onsubmit="return validacionAltaCuenta(this)">
            Nombre de la cuenta <input type="text" name="nombreCuenta" required><br>
            Alias <input type="text" name="alias" required><br>
            Usuario del propietario <input type="text" name="propietario"><br>
            <button type="submit"> Enviar </button>
        </form>
    </div>
</body>
</html>