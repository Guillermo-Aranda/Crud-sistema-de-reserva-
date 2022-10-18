
<?php  
 require_once "./clases/conexion.php"; 
 require_once "./clases/crud.php";
 $crud = new crud ();
 $datos = $crud->mostrardatosclientes();
 //$id=$_POST['id'];
// $$respuesta = $crud->obteneridcliente();
// echo $$respuesta->id_cliente;
 //print_r($datos);
 ?>

	
	 <?php include "./header.php"; ?>

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
                   

                      <h2>El Desvio restaurant </h2>
					 <h2 class="sub-titulo"></h2>
					 <?php   $$respuesta = $crud->obteneridcliente(); //obtienen el id del ultimo cliente //en realidad obtiene  todos los datos asociados a esa id unica
                            $$respuesta->id_cliente;?> 
                       <?php   $$respuesta = $crud->obteneridreservas(); //obtienen el id del ultima reserva
                          $$respuesta->num_reseva;?> 
                   
                     <form  action="./procesos/insertar.php" method="post" > <!--para pasar los datos -->
					

                        <div class="div-clientes">
                           <input type="text "   hidden value= " <?php  echo $$respuesta->id_cliente +1;?>" name ="id_cliente">
						   <input type="text "   hidden value= " <?php  echo $$respuesta->num_reseva +1;?>" name ="num_reseva">

                  
						<label for="Nombre completo" ></label>
						<h4 class="titulo nombre">Nombre completo</h4>
						<input type="text"class="form-control"  id="nombrecompleto" name="razon_social" ><!--validacion del lado del servidor name=nombres de campos o atributos de la bd para conectarlo mediante php y phpmy admin-->	
					
	
						<h4 class="titulo">Telefono</h4>
						<input  type="number"  class="form-control" id="telefono" name="tel_cliente"><!--para armar formularios-->
					   
					   </div>
				       <div class="div-reservas">
					   <h4 class="titulo fecha">Fecha</h4>
					   <input  type="date" class="form-control" id="fecha" name="fecha"><!--elegir fechas-->
				   

					   <h4 class="titulo hora medio dia">Hora</h4>
				     	<input type="time"  class="form-control"  id="fecha medio dia" name="hora" ><small>mña 9hs a 15hs  tarde 19hs a 00.00hs Estimacion</small>
						 <br>
	
				   
					    <h4 class="titulo">informacion adicional</h4> <!--investigar propiedades-->
				        <textarea class="form-control" name="descripcion_reserva" id="texarea" cols="50" rows="4">numero de personas</textarea>

					
                        <br>
				        <br>

                        <button class="btn btn-primary mt-3">
							<i class="fa-solid fa-floppy-disk"></i>reservar <!--enviar o subir el contenido-->
					    </button>
						</form><!--para armar formularios-->
				 </div>
					
                   
                 </div>
             </div>
         </div>
     </div>
 </div>

		
		<footer>
			<div class="conteiner">
				<h4>Contactos</h4>
				<p>redes sociales datos fiscales </p>
			</div>
		</footer>

<?php include "./scripts.php"; ?>