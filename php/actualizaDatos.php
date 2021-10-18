<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['temperatura'];
	$a=$_POST['voltaje'];
	$e=$_POST['humedad'];

	$sql="UPDATE datos set temperatura='$n',
								voltaje='$a',
								humedad='$e'
				where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>