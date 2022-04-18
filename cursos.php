<?php
require "./sections/head.php";

echo "<body>";
require "./sections/navbar.php";
?>

<div class="card col-lg-11 mx-auto mt-3">

	<div class="card-body">

		<img src="img/iem_1.jpg" class="marco" /><img src="img/iem_2.jpg" class="marco" />

		<?php readfile("./idiomas/content_cursos_$idioma.html")?>
		
	</div>
</div>


</div>
<?php
require "./sections/footer.php";

?>
</body>

</html>