<?php
require "./sections/head.php";


require "./sections/navbar.php";
?>

		<div class="card col-lg-11 mx-auto mt-3">
			<div class="card-body" >
				<img src="img/iem_3.jpg" class="marco" /><img src="img/iem_4.jpg" class="marco"/>
		    </div>
		    	<h1 class="text-center py-1"><?=$contacto_localizacion?></h1><br><br>
		    	<div class="container col-lg-10 mx-auto py-3">
					<h2 class="text-center"><?=$contacto_contacto?></h2>
					<p><?=$contacto_obligatorios?></p><br>
					<form id="form" name="form" method="get" action='#'>
						<div class="form-group">
						<label for="nombre"><?=$contacto_nombre?>

						</label>
						<input type="text"
						name="nombre"
						autofocus id="nombre" class="form-control col-lg-4" />
						</div>
						<div class="form-group">
						<label for="email"><?=$contacto_email?>

						</label>
						<input type="email"
						name="email"
						id="email"
						class="form-control col-lg-4"
						placeholder="nom@mail.com" />
						</div>
						<div class="form-group">
						<label for="telefono"><?=$contacto_telefono?>

						</label>
						<input type="tel"
						name="telefono"
						id="telefono"
						class="form-control col-lg-4">
						</div>
						<div class="form-group">
						<label><?=$contacto_mensaje?></label><br>
						<textarea id="mensaje" class="form-control"
								name="mensaje"></textarea>
						</div>
						<div>
						<?=$contacto_ley?>
						<div>

						<input id="privacidad" type="checkbox" name="privacidad">&nbsp&nbsp
						<span id='ver' onclick="muestraAlert()"><?=$contacto_conformidad?>
						</span><br><br>
						<input id="enviar" type="button" class="btn btn-primary" name="enviar" value="Enviar" onclick="validaFormulario()"/><br>
						<div id="alerta">


					</form>


				</div>
		    
		
		</div>

<div class="container">
	
</div>
</div>
</div>
</div>
</div>


</body>
<?php
	require "./sections/footer.php"

?>


</html>
