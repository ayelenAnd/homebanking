
<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homebanking</title>
    <script src="js/validacion-login.js"></script>
    <link rel= "stylesheet" href = "css/main.css" />
    <link rel= "stylesheet" href = "css/login.css" />
</head>
<body> 
    <div class = "login-conteiner">
    <form method="POST" action="./php/get-user.php" onsubmit="return validacionLogin(this)"> 
        Usuario <input type="text" name="user"><br>
        Contraseña <input type="password" name="password"><br>
        <button type="submit"> Ingresar </button>
        </form>
    </div>
</body>
</html>