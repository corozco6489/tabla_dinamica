

<?php 
		function conexion(){
			$servidor="sql306.epizy.com";
			$usuario="epiz_29744482";
			$password="RDWAJlDAJAcD8S";
			$bd="epiz_29744482_agenda";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}


 ?>