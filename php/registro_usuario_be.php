<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    // encriptamiento de contrasenias
    $contrasenia = hash('SHA1', $contrasenia);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasenia)
                values('$nombre_completo', '$correo', '$usuario', '$contrasenia')";

    // Verificar que los correos no se repitan
    
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
            alert("Este correo electronico ya esta registrado, intente con otro diferente");
            window.location = "../index.php";
        </script>
        ';
        exit();
    }

    // Verificar que el nombre no se repitan
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
        <script>
            alert("Este usuario ya esta registrado, intente con otro diferente");
            window.location = "../index.php";
        </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);      
    
    if($ejecutar){
        echo '
            <script>
                alert("Usuario creado exitosamente");
                window.location = "../index.php"
                </script>
        ';
    }else{
        '
            <script>
                alert("Intentalo de nuevo usuario no almacenado");
                window.location = "../index.php"
                </script>
        ';

    }

    mysqli_close($conexion);

?>