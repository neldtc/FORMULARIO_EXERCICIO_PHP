<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $edad = $_REQUEST['edad'];
    $sexo = $_REQUEST['sexo'];
    $email = $_REQUEST['email'];
    $telefono = $_REQUEST['telefono'];


    
    if (empty($nombre) || empty($apellido) || empty($edad) || empty($sexo) || empty($email) || empty($telefono)) {
        echo "Por favor complete todos los campos del formulario.";
    } else {
  
        echo "<h2>Datos recibidos:</h2>";
        echo "Nombre: $nombre <br>";
        echo "Apellido: $apellido <br>";
        echo "Edad: $edad <br>";
        echo "Sexo: $sexo <br>";
        echo "Correo electrónico: $email <br>";
        echo "Número de teléfono: $telefono <br>";
    }
} else {


    header("Location: formulario.html");
    exit;
}
?>