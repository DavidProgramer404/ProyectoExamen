<?php

require('model/conexion_patrones.php');


$con = new conexion();

$usuarios = $con->getUsers();

require('Views/V_verUsuarios.php');


?>