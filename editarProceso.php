<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: crud.php?mensaje=error');
    }

    include 'model/conexion_crud_be.php';
    $codigo = $_POST['codigo'];
    $nombre = $_POST['txtNombre'];
    $edad = $_POST['txtEdad'];
    $cargo = $_POST['txtCargo'];
    $empresa = $_POST['txtEmpresa'];

    $sentencia = $bd->prepare("UPDATE persona SET nombre = ?, edad = ?, cargo = ?, empresa = ? where codigo = ?;");
    $resultado = $sentencia->execute([$nombre, $edad, $cargo, $empresa, $codigo]);

    if ($resultado === TRUE) {
        header('Location: crud.php?mensaje=editado');
    } else {
        header('Location: crud.php?mensaje=error');
        exit();
    }
    
?>