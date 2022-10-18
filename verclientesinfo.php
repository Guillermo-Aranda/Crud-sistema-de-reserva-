             
 <?php  
 require_once "./clases/conexion.php"; 
 require_once "./clases/crud.php";
 $crud = new crud ();
 $datos = $crud->mostrardatosclientes();
 //print_r($datos);
 ?>

<?php include "./header.php"; ?>

    <div class="container"> 
        <div class="row">
            <div class="col">
              <div class="card mt-4">
                  <div class="card-body">
                     <form action="">

                     <h2> Reportes Reservas info clientes </h2>
                     <a href="./agregarReservas.php" class="btn btn-primary">
                     <i class="fa-solid fa-user-plus"></i>  Agregar nueva reserva 
                     
                     <a href="" class="btn btn-secundary">
                     <i class="fa-solid fa-user-plus"></i>  Ver Clientes
                     </a>

                     <label for="filtrar por fecha" >Filtrar por fecha</label>
                     <input type="date" id="filtro" name="filtro">
                     
                     </form>
                     
                     <hr>

                     <table class="table  table-sm table-hover table-bordered">
                     <thead>
                     <th class="text-center">Cliente numero</th>
                     <th class="text-center">nombre completo</th>
                     <th class="text-center">telefono</th>
                 
                     <th class="text-center">EDITAR</th>
                     <th class="text-center">Eliminar</th>
                     </thead>

                     <tbody>
                     <?php  
                       foreach($datos as $item) {
                      ?>
                     <tr>
                         <td class="text-center" ><?php echo $item ['id_cliente'] ?></td>
                         <td class="text-center"><?php echo $item -> razon_social ?></td>
                         <td class="text-center"><?php echo $item -> tel_cliente ?></td>
                     
                         <td class="text-center">
                          <form action="" method="$_POST">
                         <button class="btn btn-warning"> 
                           <i class="fa-solid fa-user-pen"></i>
                          </button>
                     </form>
                    </td>
                     <td class="text-center">
                      <form action="">
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

