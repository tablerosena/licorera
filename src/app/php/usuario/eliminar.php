<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  require("../conexion.php");
  
  echo $del = "DELETE FROM usuarios WHERE id_usuario=".$_GET['id'];
  //mysqli_query($conexion,$del) or die("no elimino");
    
  
  class Result {}

  $response = new Result();
  $response->resultado = 'OK';
  $response->mensaje = 'articulo borrado';

  //print_r($response);

  header('Content-Type: application/json');
  echo json_encode($response);    
?>