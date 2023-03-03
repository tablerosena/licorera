<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  $json = file_get_contents('php://input');
 
  $params = json_decode($json);
  $id = $_GET['id'];
  
  require("../conexion.php");
  
  $editar = "UPDATE usuarios SET nombre='$params->nombre', usuario='$params->usuario', clave=sha1('$params->clave'), tipo='$params->tipo'  WHERE id_usuario=$id";
  mysqli_query($conexion, $editar) or die('no edito'); 
  
  class Result {}

  $response = new Result();
  $response->resultado = 'OK';
  $response->mensaje = 'datos modificados';

  header('Content-Type: application/json');
  echo json_encode($response);  
?>