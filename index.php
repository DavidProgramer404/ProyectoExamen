<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: bievenida.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProyectoExamen-Login-Registros</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="">
</head>

<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Inicia Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar Sesión</p>
                    <button id="btn__registrarse">registrarse</button>
                </div>
            </div>

            <!-- formulario de login de resgistros -->
            <div class="contenedor__login-register">
                <!-- Login -->
                <form action="php/login_usuario_be.php" method="post" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo electrónico" name="correo">
                    <input type="password" placeholder="contrasenia" name="contrasenia">
                    <button>Entrar</button>

                </form>
                <!-- Registro -->

                <form action="php/registro_usuario_be.php" method="post" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">  
                    <input type="text" placeholder="Correo electrónico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Clave" name="contrasenia">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>

</html>