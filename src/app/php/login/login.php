<?php
    header('Access-Control-Allow-Origin: *'); 
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

    $user = $_GET['user'];
    $cla = $_GET['clave'];

    require("../conexion.php");

    $con = "SELECT * from usuarios WHERE usuario='$user' AND clave=sha1('$cla')";
    $res=mysqli_query($conexion,$con) or die('no consulto el usuario');

    $vec=[];  
    while ($reg=mysqli_fetch_array($res))  
    {
        $vec[]=$reg;
    }

    if($vec==[]){
        $vec[0] = array("validar"=>"no valida");
    }else{
        $vec[0]['validar']="valida";
    }

    $cad=json_encode($vec);
    echo $cad;
    header('Content-Type: application/json');
?>