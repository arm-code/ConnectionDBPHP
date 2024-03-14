<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $database = "users"; // Nombre de la base de datos que creaste

    $conn = new mysqli($servername, $username, $password, $database);

    
    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    
    $sql_insert = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
    if ($conn->query($sql_insert) === TRUE) {        
        header("Location: index.php?registro=exito");
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }

    
    $conn->close();
}
?>
