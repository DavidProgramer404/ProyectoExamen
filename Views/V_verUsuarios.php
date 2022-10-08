<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/controller.css">
    <title>Lista de Usuarios</title>
</head>
<body>
    <br>
    <h2>Patrones de usuarios Backend (MVC)</h2>
    <table border= "2" width="50%" >
        <thead>
            <tr>
                <th>CORREO USUARIO</th>
                <th>NOMBRE USUARIO</th>
                <th>CLAVE USUARIO ENCRIPTADA</th>
                <tr></tr>
            </tr>
        </thead>

        <tbody>
            <?php
            
            foreach ($usuarios as $user){
                echo "<tr class='row center'>";
                
                echo "<td>". $user['correo'] ."</td>";
                
                echo "<td>". $user['usuario'] ."</td>";
                
                echo "<td>". $user['contrasenia'] ."</td>";
                
                echo "<tr>";
            }


            ?>
        </tbody>
    </table>
    
</body>
</html>