<?php  
 require_once "./clases/conexion.php"; 
 require_once "./clases/crud.php";
 $crud = new crud();
 $datos = $crud->mostrardatosclientes();
 $datos = $crud->mostrardatosreservas();
 //print_r($datos);
 ?>



<?php include "./header.php"; ?>
    <div class="container"> 
        <div class="row">
            <div class="col">
              <div class="card mt-4">
                  <div class="card-body">
                     <form action="">

                     <h2> Reporte Reservas Vista compuesta </h2>
                     <a href="./agregarReservas.php" class="btn btn-primary">
                   
                     <i class="fa-solid fa-user-plus"></i>  Agregar nueva reserva 
                     
                     <a href="./verclientesinfo.php" class="btn btn-secundary">
                     <i class="fa-solid fa-user-plus"></i>  Ver Clientes
                    </a>

                     <label for="filtrar por fecha" >Filtrar por fecha</label>
                     <input type="date" id="filtro" name="filtro">
                     
                     </form>
                     
                     <hr>

                     <table class="table  table-sm table-hover table-bordered">
                     <thead>
                     <th class="text-center">Nombre</th>
                     <th class="text-center">Cliente Nro</th>
                 
              

                     <th class="text-center">Reserva</th>

                     <th class="text-center">Fecha/hora</th>

                     <th class="text-center">Descripcion reserva</th>

                     <th class="text-center">EDITAR</th>
                     <th class="text-center">Eliminar</th>
                     </thead>

                     <tbody>
                     <?php  
                       foreach($datos as $item) {
                      ?>
                     <tr>
                        <td class="text-center">  <?php echo $item -> razon_social ?> </td>
                     <td class="text-center"><?php echo $item ['id_cliente'] ?></td>


                     <td class="text-center"><?php echo $item ->num_reseva ?></td>
             
                     <td class="text-center"><?php echo $item ->fecha_hora  ?></td>

                     <td class="text-center"><?php echo $item ->descripcion_reserva; ?></td>

                     <td class="text-center">
                     <form action="./actualizarreserva.php" method="POST">
                     <input type="text" hidden value="<?php echo  $item->_id?>" name="id">
                     <button class="btn btn-warning"> 
                     <i class="fa-solid fa-user-pen"></i>
                     </button>
                     </form>
                     </td>
              
                     <td class="text-center">
                     <form action="./pageliminar.php" method="POST">
                        <input type="text" hidden value="<?php echo  $item->_id?>" name="id"> <!--agregarle hidden para ocultar -->
                     <button class="btn btn-danger"> 
                     <i class="fa-solid fa-user-xmark"></i>
                     </button>
                     </form>
                     </td>
                     </tr>
                     <?php } ?>
                     </tbody>
                     
                     </table>

                 </div>
             </div>
         </div>
     </div>
 </div>



<?php include "./scripts.php"; ?>