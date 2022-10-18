<?php 

include "../clases/conexion.php";
include "../clases/crud.php";
///arreglar fecha y hora en la db de copass
///insertar en clientes
$crud= new crud();
//es aca
//el 1er campo corresponde a los cambos en la bd  el segundo a los names de los imput
$datos = array(
    "id_cliente" => $sum= $_POST['id_cliente'],
    "razon_social" => $_POST['razon_social'],
    "tel_cliente" => $_POST['tel_cliente'],
    //"descripcion_reserva" => $_POST['descripcion_reserva'],
    //"fecha_hora" => $_POST['fecha'].$_POST['hora']
);
//ho loo pones aca $datos = array.$var
//fuera del array concatenado 

//'fecha'.'hora' =date("Y/m/d H:i:s");

//$time=['fecha'.'hora'];

   // "fecha_hora" -> date("Y/m/d H:i:s",$time);
   
//o lo pones todo por separado y listo
//"fecha"  => $_POST['fecha'],
//por hacer
//separar por campos clientes que inserte lo que pide clientes y asi
//investigar como hacer un isert auto incremental en un campo intero clientes y reservas
$respuesta = $crud->insertarclientes($datos);
//$respuesta = $crud->insertarreservas($datos);

if ($respuesta-> getInsertedId() > 0){
    header("location:../index.php");
}else {
    print_r($respuesta);
}
//7



//en revervas
$crud= new crud();
$datos = array(
   "id_cliente" => $sum= $_POST['id_cliente'],
   
    "num_reseva"=> $_POST['num_reseva'],
   "razon_social" => $_POST['razon_social'],
   //"tel_cliente" => $_POST['tel_cliente'],
   "descripcion_reserva" => $_POST['descripcion_reserva'],
   "fecha_hora" => $_POST['fecha'].$_POST['hora']
);
$respuesta = $crud->insertarreservas($datos);
if ($respuesta-> getInsertedId() > 0){
    header("location:../index.php");
}else {
    print_r($respuesta);
}

?>