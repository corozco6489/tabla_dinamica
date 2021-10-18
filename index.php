<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
    <script src="librerias/jquery-3.2.1.min.js"></script>
    <script src="js/funciones.js"></script>      
    <script src="librerias/bootstrap/js/bootstrap.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
</head>
<body>
    <div class="container">
        <div id="tabla"></div>

    </div>
 


<!-- Modal para valores nuevos-->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega Nuevos Valores</h4>
      </div>
      <div class="modal-body">
            <label>Temperatura</label>
            <input type="text" name="" id="temperatura" class="form-control input-sn">
            <label>Voltaje</label>
            <input type="text" name="" id="voltaje" class="form-control input-sn">
            <label>Humedad</label>
            <input type="text" name="" id="humedad" class="form-control input-sn">
            

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">Agregar</button>
        
      </div>
    </div>
  </div>
</div>


 <!-- Modal edicion -->


<!-- Modal para valores nuevos-->
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar valores</h4>
      </div>
      <div class="modal-body">
            <input type="text" hidden="" id="idpersona" name="">
            <label>Temperatura</label>
            <input type="text" name="" id="temperatura1" class="form-control input-sn">
            <label>Voltaje</label>
            <input type="text" name="" id="voltaje1" class="form-control input-sn">
            <label>Humedad</label>
            <input type="text" name="" id="humedad1" class="form-control input-sn">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizardatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>




</body>
</html>


<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          temperatura=$('#temperatura').val();
          voltaje=$('#voltaje').val();
          humedad=$('#humedad').val();
          telefono=$('#telefono').val();
            agregardatos(temperatura,voltaje,humedad);
        });

        $('#actualizardatos').click(function(){

          actualizaDatos();
        });

        

    });
</script>