

function agregardatos(temperatura,voltaje,humedad){

	cadena="temperatura=" + temperatura + 
			"&voltaje=" + voltaje +
			"&humedad=" + humedad;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');				
				alertify.success("agregado con exito :)");
			}else{				
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}


function agregaform(datos){

	d=datos.split('||');

	$('#idpersona').val(d[0]);
	$('#temperatura1').val(d[1]);
	$('#voltaje1').val(d[2]);
	$('#humedad1').val(d[3]);
	
}

function actualizaDatos(){


	id=$('#idpersona').val();
	temperatura=$('#temperatura1').val();
	voltaje=$('#voltaje1').val();
	humedad=$('#humedad1').val();

	cadena="id=" + id +
			"&temperatura=" + temperatura + 
			"&voltaje=" + voltaje +
			"&humedad=" + humedad;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}


function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}



