
	 <?php include "./header.php"; 
   include "./clases/conexion.php"; 
   include "./clases/crud.php"; 
   $crud = new Crud;
    $datos = $crud->mostrardatosreservas();
   $id = $_POST['id'];
   $datos = $crud-> obtenerdocaeliminar($id);
   $idmongo =$datos->_id;
  

  
  // $$datosfecha =$datos->fecha_hora= $_GET['fecha'];
  
 print_r($$datosfecha);
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



<div class="container"> 
   <div class="row">
       <div class="col">
         <div class="card mt-4">
             <div class="card-body">
              

                 <h2> Actualizar reservas </h2>
                <h2 class="sub-titulo"></h2>
              
                <form  action="./procesos/Actualizar.php" method="post" > <!--para pasar los datos -->
                <input type="text" hidden value="<?php echo  $idmongo?>" name="id"> <!--agregarle hidden para ocultar -->
                        <div class="div-clientes">
				
                <input type="text "   hidden value= " <?php  echo $datos->id_cliente ;?>" name ="id_cliente">
						   <input type="text "   hidden value= " <?php  echo $datos->num_reseva ;?>" name ="num_reseva">

                  
						<label for="Nombre completo" ></label>
						<h4 class="titulo nombre">Nombre completo</h4>
						<input type="text"class="form-control"  id="nombrecompleto" name="razon_social" value="<?php echo $datos->razon_social?>" ><!--validacion del lado del servidor name=nombres de campos o atributos de la bd para conectarlo mediante php y phpmy admin-->	
				
					   
					   </div>
				       <div class="div-reservas">
					   <h4 class="titulo fecha">Nueva fecha</h4>
					   <input  type="date" class="form-control" id="fecha" name="fecha" >
				   

					   <h4 class="titulo hora medio dia">Nueva hora</h4>
				     	<input type="time"  class="form-control"  id="fecha medio dia" name="hora" ><small>mña 9hs a 15hs  tarde 19hs a 12hs</small>
						 <br>
	
				   
					    <h4 class="titulo">Informacion adicional</h4> <!--investigar propiedades-->
				        <textarea class="form-control" name="descripcion_reserva" id="texarea" cols="50" rows="4" value="<?php echo  $datos->descripcion_reserva?>" ><?php echo  $datos->descripcion_reserva?></textarea>

                </div>
                <br>
				        <br>
               <button class="btn btn-warning"  id="btn actualizar">
               <i class="fa-solid fa-floppy-disk"></i>Actualizar 
               </button>
           </form><!--para armar formularios-->
               
                
              
              
            </div>
        </div>
    </div>
</div>
</div>


<?php include "./scripts.php"; ?>












