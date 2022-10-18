<?php 

include "../clases/conexion.php"; 
include "../clases/crud.php"; 
$crud = new Crud();
 $id = $_POST['id'];

$respuesta = $crud->eliminar($id);

if($respuesta->getdeletedcount() > 0) {
    header("location:../index.php");
}else {
    print_r($respuesta);
}



?><!--si respuesta es mayor a 0 llama al metodo de mongo getdeletedcount y te manda al index -->