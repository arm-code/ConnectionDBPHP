<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$database = "users"; // nombre de la base de datos que creaste

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// SQL
$sql_select = "SELECT id, nombre, email FROM usuarios";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    
    echo "<h2>Listado de Usuarios</h2>";
    echo "<table class='table'>";
    echo "<thead><tr><th>ID</th><th>Nombre</th><th>Email</th></tr></thead>";
    echo "<tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "No hay resultados.";
}


$conn->close();
?>
