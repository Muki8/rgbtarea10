<?php
$host = 'localhost'; // O la IP del servidor de base de datos
$username = 'root'; // Tu nombre de usuario de la base de datos
define('DBPASSWORD', ''); // Define la contraseña como constante
$database = 'RGB'; // El nombre de tu base de datos

// Crea una conexión a la base de datos
$conn = new mysqli($host, $username, DBPASSWORD, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Asegura que hay una petición POST con contenido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $json = file_get_contents('php://input');
    $datos = json_decode($json);

    // Prepara la sentencia SQL para insertar los datos
    $stmt = $conn->prepare("INSERT INTO contadores (rojos, verdes, azules) VALUES (?, ?, ?)");
    $stmt->bind_param("iii", $datos->rojos, $datos->verdes, $datos->azules);

    // Ejecuta la sentencia
    if ($stmt->execute()) {
        echo "Datos guardados correctamente";
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }

    // Cierra la sentencia y la conexión
    $stmt->close();
    $conn->close();
} else {
    echo "Solicitud no válida.";
}


