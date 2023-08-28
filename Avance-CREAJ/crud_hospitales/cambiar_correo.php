<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'db_connection.php'; // Incluye la conexión a la base de datos
    
    // Verifica si el usuario ha iniciado sesión
    if (isset($_SESSION['id'])) {
        $nuevo_correo = $_POST['nuevo_correo']; // Obtiene el nuevo correo
        $usuario_id = $_SESSION['id']; // Obtén el ID del usuario de la sesión
        
        // Actualiza el correo del usuario en la base de datos
        $consulta = "UPDATE hospitales SET lugar = '$nuevo_correo' WHERE id = $usuario_id";
        
        if ($conn->query($consulta) === TRUE) {
            header("Location: perl-usu.php"); // Redirige de vuelta al perfil
        } else {
            echo "Error al actualizar el correo: " . $conn->error;
        }
    } else {
        echo "Error: No se ha iniciado sesión.";
    }
    
    $conn->close();
}
?>

