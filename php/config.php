<?php
function serverConnection(){
  $localhost = 'localhost';
  $username = "root";
  $password = "";
  $dbname = "homebanking";

// Create connection
  $conn = new mysqli($localhost, $username, $password, $dbname);
// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}

//El usuario no debe poder acceder a las opciones de admin
//Validar formularios desde PHP
//Configuración de los mensajes desde la BD (estilo)
//Agrupar conteiner CSS

//Cómo comunicar front y back (validaciones)
//begin_transaction ... end_transaction
//roll back commit

//Chequear que el usuario haya iniciado sesion antes de ejecutar otras acciones
//Es bueno almacenar si el usuario está conectado, el tipo y si cambió la contraseña 
//Eliminar los datos al cerrar sesion
?>