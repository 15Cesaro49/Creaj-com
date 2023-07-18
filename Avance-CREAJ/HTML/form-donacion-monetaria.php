<?php
session_start();

if($_SESSION["correo"] === null){
    header("Location: ../HTML/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Estilo-formulario-donacion.CSS">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Formulario de donaciones</title>
</head>

<body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a Salud Rural</h2>
                <p>Si quieres donar equipo medico presione aqui</p>
                <button class="sign-up-btn">Donar</button>
            </div>
        </div>
        <form action="../PHP/resgistrar_donaciones_1.php" method="post" enctype="multipart/form-data" class="formulario">
            <h2 class="create-account">Haz tu donacion aqui</h2>
            <div class="iconos">
                
            </div>
            <p class="cuenta-gratis">Donacion monetaria</p>
            <input type="hidden" name="categoria" value="monetaria">
            <input type="text" placeholder="Nombre" name="nombre" required>
            <input type="email" placeholder="Email" name="correo" required>
            <input type="number" placeholder="Numero de Telefono (opcional)" name="telefono">
            <input type="number" placeholder="Cantidad de dinero que donaras" name="dinero" required>
            <input type="number" placeholder="Numero de tarjeta" name="tarjeta" required>
            <input type="number" placeholder="CVV (Codigo de validacion)" name="cvv" required>
            <input type="submit" value="Donar">
            
        </form>
    </div>
    <div class="container-form sign-in">
        <form action="../PHP/resgistrar_donaciones_1.php" method="post" enctype="multipart/form-data" class="formulario">
            <h2 class="create-account">Donar equipo medico</h2>
            <div class="iconos">
            </div>
            <input type="hidden" name="categoria" value="equipamiento">
            <input type="email" placeholder="Email" name="correo" required>
            <input type="number" placeholder="Numero de telefono" name="telefono" required>
            <input type="text" placeholder="Equipo medico que donaras" name="equipo" required>
            <input type="number" placeholder="Cantidad de equipos medicos" name="cantidad" required>
            <input type="submit" value="Donar">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido Salud Rural</h2>
                <p>Si quieres hacer una donacion monetaria presiona aqui</p>
                <button class="sign-in-btn">Donar</button>
            </div>
        </div>
    </div>
    <script src="../JS/formulario-donacion.js"></script>
</body>

</html>