<?php 
    if(!isset($_GET['codigo'])){
        header('Location: crud.php?mensaje=error');
        exit();
    }

    include 'model/conexion_crud_be.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM persona where codigo = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: crud.php?mensaje=eliminado');
    } else {
        header('Location: crud.php?mensaje=error');
    }
    
?>