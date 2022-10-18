
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/CRUD_MONGO/vendor/autoload.php"; //dependencia composer  ayuda a realizar conexiones mas rapido
 // link de conexxcion mongo compass, mongo atlas web no local hots(con usuario pass bd ect confugurado )

 class conexion {
    public function conectar () {
        try {
           
           // $usuario ="";
          //  $password ="";
            $servidor ="localhost";
            $basedatos = "Reservas"; //bd
            $puerto ="27017";
          
            $cadenaconexion = "mongodb://".
                               // $usuario .":".
                               // $password ."@".
                                $servidor .":".
                                $puerto ."/".
                                $basedatos;

            $client=new MongoDB\Client( $cadenaconexion); //incia nuevo cliente/
            return $client ->selectDatabase($basedatos); //seleciona la bd 
    
        } catch (\Throwable $th) {
           return $th-> getMessage();
        }
     //el problema es la conexion
    }
    }
    //para validar que exite coneccino
    //$objeto = new conexion();
    //var_dump($objeto->conectar());
    
    ?>
