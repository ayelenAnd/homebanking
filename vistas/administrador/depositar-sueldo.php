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
    <script src="../../js/validacion-deposito.js"></script>
    <link rel= "stylesheet" href = "../../css/main.css" />
    <link rel= "stylesheet" href = "../../css/alta-cliente.css" />
</head>
<body>
    <a class="home" href="./admin.php">Home</a>
    <div class = "alta-conteiner">
        <form method= "POST" action="../../php/administrador/depositar-sueldo.php" onsubmit="return validacionDeposito(this)">
            Alias <input type="text" name="alias" required><br>
            Monto <input type="number" name="monto"><br>
            <button type="submit"> Confirmar </button>
        </form>
    </div>
</body>
</html>