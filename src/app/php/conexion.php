<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "almacen";

    $conexion = mysqli_connect($servidor, $usuario,$clave) or die("no se conecton a mysql");
    mysqli_select_db($conexion, $bd) or die("no encontro la base de datos");


?>