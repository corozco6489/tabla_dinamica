<?php

    require_once "../php/conexion.php";
    $conexion=conexion();

?>


<div class="row">
    <div class="col-sm-12">
    <div style="text-align: center;"> <h1>Tabla Dinamica PHP</h1></div>
    <h2>Datos Sensores</h2>
        <table class="table table-hover table-condensed table-bordered">
        <caption>
            <button class="btn btn-success" data-toggle="modal" data-target="#modalNuevo">
            Agregar Nuevo
            
            <span class="glyphicon glyphicon-plus"></span>
            
            </button>
        </caption>
        <tr>
            <td>Temperatura</td>
            <td>Voltaje</td>
            <Td>Humedad</Td>
            <td>Editar</td>
            <td>Eliminar</td>
        
        
        </tr>
        <?php
            $sql="SELECT id,temperatura,voltaje,humedad 
                from datos";
            $result=mysqli_query($conexion,$sql);
            while($ver=mysqli_fetch_row($result)){ 

                $datos=$ver[0]."||".
						$ver[1]."||".
						$ver[2]."||".
						$ver[3];




        ?>


        <tr>
            <td><?php echo $ver[1] ?></td>
            <td><?php echo $ver[2] ?></td>
            <td><?php echo $ver[3] ?></td>
            
            <td>
                <button class="btn btn-primary glyphicon glyphicon-edit" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')"></button>
                </td>
            <td>
                <button class="btn btn-danger glyphicon glyphicon-trash" onclick="preguntarSiNo('<?php echo $ver[0]?>')"></button>

            </td>
        </tr>
        
        <?php
            }
        ?>
        
        
        
        </table>




    </div>

</div>