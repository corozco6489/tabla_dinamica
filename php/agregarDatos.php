<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['temperatura'];
	$a=$_POST['voltaje'];
	$e=$_POST['humedad'];
	
	$sql="INSERT into datos (temperatura,voltaje,humedad)
								values ('$n','$a','$e')";
	echo $result=mysqli_query($conexion,$sql);

 ?>