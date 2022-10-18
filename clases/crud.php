<?php

//use MongoDB\Collection;

//require_once "./conexion.php"; //dependencia composer  ayuda a realizar conexiones mas rapido


class crud extends conexion {
    public function mostrardatosclientes() {
        try {
            $conexion = parent::conectar();
            $Colleccion = $conexion-> clientes;
           
            $datos = $Colleccion-> find();
            return $datos;
        } catch (\Throwable $th) {
            return $th -> getMessage();
        }
    }

  //  $respuesta =  $Colleccion->insertone(["fecha_hora"=>$Colleccion =>$reservas-> getdate('fecha');
    public function insertarclientes($datos) {
            try {
                $conexion = parent::conectar();
                $Colleccion = $conexion-> clientes;
                $respuesta =  $Colleccion->insertone($datos);
               return $respuesta;
            } catch (\Throwable $th) {
                return $th -> getMessage();
            }
    }
    
    public function obteneridcliente  (){
     try {
        $conexion = parent::conectar();
        $Colleccion = $conexion-> clientes;
        $respuesta =$Colleccion->findone( [],['sort'=>['_id'=>-1],'proyection'=>['_id'=>-1]]);
        return $respuesta;
     } catch (\Throwable $th) {
        //throw $th;
     }
    }

    public function obteneridreservas() {
        try {
           $conexion = parent::conectar();
           $Colleccion = $conexion-> reservas;
           $respuesta =$Colleccion->findone( [],['sort'=>['_id'=>-1],'proyection'=>['_id'=>-1]]);
           return $respuesta;
        } catch (\Throwable $th) {
           //throw $th;
        }
       }



    public function mostrardatosreservas() {
        try {
            $conexion = parent::conectar();
           
            $Colleccion = $conexion->  reservas;
            $datos = $Colleccion-> find();
            return $datos;
        } catch (\Throwable $th) {
            return $th -> getMessage();
        }
    }
//ho loo pones aca insertone($datos.var);
//insertone([
  //$var= date("Y/m/d H:i:s")  "fecha_hora"=>-('fecha')
    public function insertarreservas($datos) {
        try {
            $conexion = parent::conectar();
            $Colleccion = $conexion-> reservas;
            $respuesta =  $Colleccion->insertone($datos);
           return $respuesta;
        } catch (\Throwable $th) {
            return $th -> getMessage();
        }
}

public function obtenerdocaeliminar($id){
    try {
        $conexion = parent::conectar();
        $Colleccion = $conexion-> reservas;
        $datos = $Colleccion-> findOne(
                               array(
                                '_id'=> new MongoDB\BSON\ObjectId($id)
                               )
                                    );
    return $datos;
    } catch (\Throwable $th) {
        return $th -> getMessage();
    }

}


public function eliminar($id){
    try {
        $conexion = parent::conectar();
        $Colleccion = $conexion-> reservas;
        $respuesta = $Colleccion-> deleteOne(
                                   array(
                                          "_id" => new MongoDB\BSON\ObjectId($id)
                                        )
                                            );
    return $respuesta;                                 
    } catch (\Throwable $th) {
        return $th -> getMessage();
    }

}

public function actualizarreserva($id,$datos){
    try {
        $conexion = parent::conectar();
        $Colleccion = $conexion-> reservas;
        $respuesta = $Colleccion->updateOne(
                                         ['_id' => new MongoDB\BSON\ObjectId($id)],
                                         [
                                            '$set' => $datos
                                         ]
                                            );
    return $respuesta;                                 
    } catch (\Throwable $th) {
        return $th -> getMessage();
    }


}
  
}
  
?>