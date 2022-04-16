<?php

require "./sections/head.php";

require "./sections/navbar.php";
?>
		<div class="card col-lg-11 mt-3 mx-auto bg-ligth my-3" >
			<div class="card-body ">
				<img src="img/iem_1.jpg" class="marco"/><img src="img/iem_2.jpg" class="marco" />
		    	<h1 class="text-center py-2"><?=$title_index?></h1>
					<p><img alt="" src="img/IEM_logo.png" style="float:left; height:130px; margin-left:5px; margin-right:5px; width:130px">
					<?php readfile("./idiomas/content_index_$idioma.html")?>
			</div>
		    <br><br>
		</div>

	</div>
	<?php
		require "./sections/footer.php";

	?>
</body>
</html>
