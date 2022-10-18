<?php 

include "../clases/conexion.php";
include "../clases/crud.php";

$crud= new crud();
$id=$_POST['id'];

$datos = array(
   
    "razon_social" => $_POST['razon_social'],
    "fecha_hora" => $_POST['fecha'].$_POST['hora'],
    "descripcion_reserva" => $_POST['descripcion_reserva']
    
 );

 $respuesta = $crud->actualizarreserva($id,$datos);
 if ($respuesta-> getModifiedCount() > 0||  $respuesta->getMatchedCount() > 0){
     header("location:../index.php");
 }else {
     print_r($respuesta);
 }


?>