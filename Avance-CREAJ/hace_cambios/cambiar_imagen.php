<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'db_connection.php'; // Incluye la conexión a la base de datos
    
    $imagen = $_FILES['nueva_imagen']['name']; // Obtén el nombre de la nueva imagen
    $imagen_temp = $_FILES['nueva_imagen']['tmp_name']; // Obtén la ubicación temporal de la imagen
    
    // Ruta de la carpeta de destino
    $carpeta_destino = 'imagen-usu/';
    
    // Mueve la imagen a la carpeta de destino
    move_uploaded_file($imagen_temp, $carpeta_destino . $imagen);
    
    $consulta = "UPDATE registro SET foto_perfil = '$carpeta_destino$imagen' WHERE id = 1"; // Cambia el ID y la consulta según tu caso
    
    if ($conn->query($consulta) === TRUE) {
        header("Location: ../HTML/perl-usu.php"); // Redirige de vuelta al perfil
    } else {
        echo "Error al actualizar la imagen: " . $conn->error;
    }
    
    $conn->close();
}
?>

