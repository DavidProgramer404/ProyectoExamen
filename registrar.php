<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEdad"]) || empty($_POST["txtCargo"] || empty($_POST["txtEmpresa"]))){
        header('Location: crud.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion_crud_be.php';
    $nombre = $_POST["txtNombre"];
    $edad = $_POST["txtEdad"];
    $cargo = $_POST["txtCargo"];
    $empresa = $_POST["txtEmpresa"];
    
    
    $sentencia = $bd->prepare("INSERT INTO persona(nombre,edad,cargo,empresa) VALUES (?,?,?,?);");
    $resultado = $sentencia->execute([$nombre,$edad,$cargo,$empresa]);

    if ($resultado === TRUE) {
        header('Location: crud.php?mensaje=registrado');
    } else {
        header('Location: crud.php?mensaje=error');
        exit();
    }
    
?>