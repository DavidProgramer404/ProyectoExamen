<?php 
session_start();
if(empty($_SESSION["usuario"])){
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"> 
    

</head>

<body>

    <header class="bg_animate">
        <div class="header_nav">
            <div class="contenedor">
                <h1>Efecto Burbuja</h1>
                <nav>
                    <a href="#">Inicio</a>
                    <a href="#">Servicios</a>
                    <a href="#">Contacto</a>
                </nav>
            </div>
        </div>

        <section class="banner contenedor">
            <secrion class="banner_title">
                <h2>Necesitas ayuda <br> con tu PC?</h2>
                <a href="#" class="llamanos">Llamanos ya!</a>
            </secrion>
            <div class="banner_img">
                <img src="./images/laptop-support.png" alt="">
            </div>
        </section>

        <div class="burbujas">
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
        </div>



    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icono"><ion-icon name="people-circle-outline"></ion-icon></span>
                    <span class="titulo">Bienvenido usuario</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icono"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="titulo">Inicio</span>
                </a>
            </li>
            <li>
                <a href="contacto/contacto.php">
                    <span class="icono"><ion-icon name="people-outline"></ion-icon></span>
                    <span class="titulo">Página desarrollador</span>
                </a>
            </li>
            <li>
                <a href="contacto/contacto.php">
                    <span class="icono"><ion-icon name="help-outline"></ion-icon></span>
                    <span class="titulo">Ayuda técnica</span>
                </a>
            </li>
            <li>
                <a href="./bienvenida.php">
                    <span class="icono"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="titulo">Registros de personas</span>
                </a>
            </li>
            <li>
                <a href="index.php">
                    <span class="icono"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <span class="titulo">Inicia sesión - Registrarse</span>
                </a>
            </li>
            <li>
                <a href="php/cerrar_sesion.php">
                    <span class="icono"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <span class="titulo">Cerrar sesión</span>
                    
                </a>
            </li>
            
            
        </ul>
        <div class="toggle"></div>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="js/app.js"></script>
    <script src="js/reloj.js"></script>



</body>

</html>