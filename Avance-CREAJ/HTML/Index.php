<?php
session_start();

if($_SESSION["correo"] === null){
    header("Location: ../HTML/login.php");
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd
    1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>SaludRural</title>
    <link rel="shortcut icon" href="../Imagenes/favicon.png" />
    <link rel="stylesheet" href="../CSS/nav-menu.css">
  </head>
  <body>
    <header>
      <div class="navbar">
        <div clas="logo"><a href="#">SaludRural</a></div>
        <ul class="links">
          <li><a href="#"><strong>Inicio</strong></a></li>
          <li><a href="../HTML/form-donacion-monetaria.php">Donaciones</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="../HTML/AcercaDe.html">Acerca de</a></li>
        </ul>
        <a href="#" class="action_btn"><strong>Iniciar sesión</strong></a>
        <div class="toggle_btn">
          <i class="fa-solid fa-bars"></i>
        </div>
      </div>

      <div class="dropdown_menu">
        <li><a href="#"><strong>Inicio</strong></a></li>
        <li><a href="#">Donaciones</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="../HTML/AcercaDe.html">Acerca de</a></li>
        <li><a href="#" class="action_btn"><strong>Iniciar sesión</strong></a></li>
      </div>
    </header>

    <main>
      <section id="hero">
        <h1>¡Bienvenido a SaludRural!</h1>
        <p>
          Ayudanos a apoyar a los mas necesitados
        </p></br>
        </p>
      </section>
    </main>

    <script>
      const toggleBth = document.querySelector('.toggle_btn')
      const toggleBtnIcon = document.querySelector('.toggle_btn i')
      const dropDownMenu = document.querySelector('.dropdown_menu')

      toggleBtn.onclick = function () {
        dropDownMenu.classList.toggle('open')
        const isOpen = dropDownMenu.classList.contains('open')

        toggleBtnIcon.classList = isOpen
        ?'fa-solid fa-xmark'
        :'fa-solid fa-bars'
      }

    </script>
    <!--
    <main>
      <div class="big-wrapper light">
        <img src="../img/shape.png" alt="" class="shape" />

        <header>
          <div class="container">
            <div class="logo">
              <img src="../Imagenes/Logo.png" alt="Logo" />
            </div>

            <div class="links">
              <ul>
                <li><a href="#"><strong>Inicio</strong></a></li>
                <li><a href="#">Donaciones</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#" class="btn">Regístrate</a></li>
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>

        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                <h1>Future is here,</h1>
                <h1>Start Exploring now.</h1>
              </div>
              <p class="text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Delectus eius distinctio odit, magni magnam qui ex perferendis
                vitae!
              </p>
              <div class="cta">
                <a href="#" class="btn">Get started</a>
              </div>
            </div>

            <div class="right">
              <img src="./img/person.png" alt="Person Image" class="person" />
            </div>
          </div>
        </div>

        <div class="bottom-area">
          <div class="container">
            <button class="toggle-btn">
              <i class="far fa-moon"></i>
              <i class="far fa-sun"></i>
            </button>
          </div>
        </div>
      </div>
    </main>-->

    <!-- JavaScript Files 
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="./app.js"></script>-->

  </body>
</html>