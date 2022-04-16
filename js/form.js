	function validaFormulario() {
		var text="";
		var error=false;

		if($("#nombre").val() == "") {
			//validar nombre informado
			text=(Nombre + "\n");
			error=true;
		}

		if($("#email").val() == "") {
			//validar email informado
			text=(text + Email + "\n");
			error=true;
		} else {
			//validar email correcto
        	if (!/^\w+([\.-]\w+)*@\w+([\.-]\w+)*$/.test($("#email").val())) {
				text=(text + Valida_Email + "\n");
				error=true;
			}
		}

		if($("#mensaje").val() == "") {
			text=(text + Mensaje + "\n");
			error=true;
		} 

		if (!document.getElementById('privacidad').checked) {
			text=(text + Ley_privacidad);
			error=true;
		};

		if (error==true) {
			text=(Revisar + text + "\n\n");
		}

		if (error==true) {
			alert(text);
		} else {
			$('#form').submit();
 		}
	}