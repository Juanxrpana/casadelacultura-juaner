//CONTROL DE BOTONES

$("#incluir").on("click",function(){
	
		console.log("Insertar1")
		var datos = new FormData();
		datos.append('accion','incluir');
		datos.append('idSalon',$("#idSalon").val());
		datos.append('NombreSalon',$("#NombreSalon").val());
		datos.append('CantidadPersonasSalon',$("#CantidadPersonasSalon").val());
		datos.append('CantidadSillas',$("#CantidadSillas").val());
		enviaAjax(datos,'incluir');
	
});
$("#modificar").on("click",function(){
	confirmar();

	$('#si').on('click', function() {
		
		i
			console.log("Modificar1");
			var datos = new FormData();
			datos.append('accion','modificar');
			datos.append('idSalon',$("#idSalon").val());
		    datos.append('NombreSalon',$("#NombreSalon").val());
		    datos.append('CantidadPersonasSalon',$("#CantidadPersonasSalon").val());
		    datos.append('CantidadSillas',$("#CantidadSillas").val());
		    enviaAjax(datos,'incluir');



	});
	
});