$(document).ready(function () {


});
//__________________________________ Click Boton Login __________________________________________________________
$("#password").keyup(function (event) {

	if (event.keyCode == 13) {

		ingresar();
	}
});

$("#Ingresar").click(function (event) {

	ingresar();

});

$('#mostrar2').on('change', function (event) { //mostrar contraseña 
	// Si el checkbox esta "checkeado"
	if ($('#mostrar2').is(':checked')) {
		// Convertimos el input de contraseña a texto.
		$('#password').get(0).type = 'text';
		// En caso contrario..
	} else {
		// Lo convertimos a contraseña.
		$('#password').get(0).type = 'password';
	}
});
// Fin Function Ingresar ==========================================================================

//-----------------------------------funcion ingresar ------------------------------------------

function ingresar() {

	var action = 'IniciarSesion'
	var usuario = $('#usuario').val()
	var password = $('#password').val()

	if (usuario.length && password.length) {

		// Estoy preparando los datos que voy a enviar
		// Es un tipo de variable para que mediante Ajax pueda ser interpretado
		var datos = new FormData(); 

		// Voy llenando los datos
		datos.append('action', action);
		datos.append("usuario", usuario);
		datos.append('password', password);

		// DONDE VOY A PEDIR LA INFORMACION
		url = 'app/controllers/login.php';

		// Preparamos el cohete
		$.ajax({
			// async:false,
			cache: false,
			contentType: false,
			processData: false,
			type: 'POST', // Metodo HTTP (GET = Obtener, POST = Enviar Información, DELETE, UPDATE)
			url: url,
			data: datos,
			dataType: "json",
			beforeSend: function () { },
			success: function (data) {

				if (data.success == true) {

					console.log({data});
					

					alert('Hola ' +  data.session.nombre + ' ' + data.session.apellido +' Bienvenido Al Sistema');
					alert(`Hola ${data.session.nombre} ${data.session.apellido} Bienvenido Al Sistema`);

					setTimeout(function () { window.location.href = data.url; }, 1000);
				} else {

					if (data.tipo_error == 'cedula') {
						alert('Error: La c\u00e9dula ingresada no est\u00e1 registrada en el sistema');
					} else if (data.tipo_error == 'password') {
						alert('Error: La contrase\u00f1a ingresada es incorrecta');
					} else {
						alert('Datos Incorrectos');
					}
				}
			}

		});
	} else {

		alert('Llene Los Campos');
	}
};
//-----------------------------------Fin funcion ingresar ------------------------------------------