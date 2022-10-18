<?php 
include "./header.php";
include "./clases/conexion.php"; 
include "./clases/crud.php"; 
$crud = new Crud;
 $id = $_POST['id'];
$datos = $crud->obtenerdocaeliminar($id);



 ?>


<div class="container">
          <p class="logo">Sistema de reservas el desvio - Figuera</p>
             <nav>
              <ul>     <!--enlaces para comunicar la pag NAV-->
               <li><a href="index.html"target="_BLANK">El desvio</a></li>
               <li><a href="Carta.html"target="_BLANK">Nuestra carta</a></li>
             <!----target="_BLANK" para abrir enlace en una nueva pestaña--> 
               <li><a href="Reservas.html"target="_BLANK">Reservas</a></li>
             </ul>
       </nav>
</div>	



<div class="container "> 
   <div class="row">
       <div class="col">
         <div class="card mt-4 fondoeliminar"> <!--css eliminar-->
            <div class="card-body ">
              

                <h2> Eliminar reservas </h2>
                <hr>  <!--linea de separacion-->
                <table  class="table  table-sm table-hover table-bordered fondoeliminar">
                <thead>
                <th class="text-center">Cliente Nro</th>
                <th class="text-center">Reserva</th>
                <th class="text-center">Fecha/hora</th>
                <th class="text-center">Descripcion reserva</th>
                </thead>
                     <tbody>
                     <tr>
                     <td><?php echo $datos ->id_cliente; ?></td>
                     <td><?php echo $datos ->num_reseva; ?></td>
                     <td><?php echo $datos ->fecha_hora; ?></td>
                     <td><?php echo $datos ->descripcion_reserva; ?></td>
                    </tr>
                    </tbody>
                </table>
                   <hr>

                 <div class="alert alert-danger" role="alert">
                    <p> Eliminacion sin vuelta atras</p>  

                 </div>
              <form action="./procesos/eliminar.php" method="POST">
                 <input type="text" name="id" hidden value="<?php echo $datos->_id;?>">
                <button class="btn btn-danger">
                <i class="fa-solid fa-user-xmark"></i>Eliminar
                </button>

              </form>
           
               
                
              
              
            </div>
        </div>
    </div>
</div>
</div>


<?php include "./scripts.php"; ?>
