<?php
require "./sections/head.php";

echo "<body>";
require "./sections/navbar.php";
?>

<div class="card col-lg-11 mx-auto mt-3">

	<div class="card-body">

		<img src="img/iem_1.jpg" class="marco" /><img src="img/iem_2.jpg" class="marco" />

		<?php readfile("./idiomas/content_cursos_$idioma.html") ?>

		<!--	<h1 class="text-center py-2">Idiomas (desde los 4 años).</h1>
				<div class="container px-3">
				<p>Horarios de mañana, tarde, noche y sábados mañana.</p>

				<p>Grupos homogéneos, agrupados por edades y niveles</p>

				<p>Grupos reducidos.</p>

				<p>Preparación de los exámenes de la Univesidad de Cambridge o de la Escuela Oficial de idiomas.</p>
				</div>
				<h1 class="text-center">Refuerzo escolar de todas las materias</h1>
				<div class="container px-3">

				<p>Para todos los niveles escolares</p>

				<p>Trabajamos con los libros que utilizan los alumnos</p>

				<p>Seguimiento personalizado.</p>

				<p>Técnicas de estudio.</p>
-->
	</div>
</div>


</div>
<?php
require "./sections/footer.php";

?>
</body>

</html>