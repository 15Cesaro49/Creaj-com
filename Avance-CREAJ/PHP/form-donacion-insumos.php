<?php
session_start();

// Verificar si el usuario ha iniciado sesión y tiene un usuario_id válido
if (isset($_SESSION['usuario_id']) && !empty($_SESSION['usuario_id'])) {
    // Obtener el id_hospital seleccionado del formulario
    if (isset($_POST['hospital'])) {
        $id_hospital = $_POST['hospital'];
        $usuarioId = $_SESSION['usuario_id'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $fecha = $_POST['fecha'];
        $insumo = $_POST['insumo'];
        $cantidad = $_POST ['cantidad'];
        $descripcion = $_POST['descripcion'];

        // Realizar la conexión a la base de datos
        $db_host = 'localhost';
        $db_username = 'root';
        $db_password = '';
        $db_name = 'saludrural';
        $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Preparar la consulta para insertar la donación en la tabla 'donaciones'
        $sql = "INSERT INTO insumos (id_hospital, id_usuario,`nombre`, `correo`, `telefono`, `fecha`, `insumo`, `cantidad`, `descripcion`) VALUES ('$id_hospital', '$usuarioId', '$nombre','$correo','$telefono','$fecha','$insumo','$cantidad', '$descripcion')";

        if ($conn->query($sql) === TRUE) {
            echo "
            <scrip language='JavaScript'>
                swal.fire({
                    icon: 'success',
                    title: '¡Tu formulario se ha registrado exitosamente!',
                    showConfirmButton: false,
                    timer: 2000
                }).then(function() {
                    window.location = '../HTML/boton-donaciones.php';
                });
            </script>";
        } else {
            echo "Error al realizar la donación: " . $conn->error;
        }

        // Cerrar la conexión
        $conn->close();
    }
} else {
    echo "Debe iniciar sesión para realizar una donación.";
}
?>
