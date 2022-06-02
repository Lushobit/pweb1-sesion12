<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Base de datos</title>
</head>
<body>
   <?php
   function fnconexion(){	
	    //permite conectarse con el servidor local mediante el usuario root
		$cn =mysqli_connect('localhost', 'root', '');
	    //selecciona la base de datos de la conexión al servidor local
		$bd=mysqli_select_db($cn,'bdvehiculo');

		//verificar el estado de la conexión
		if(($cn==true) && ($bd==true)) {
			  //echo "Conexión Satisfactoria";
		}else{
			   echo("error". mysqli_error());
			   //permite cerrar la conexión
			   mysqli_close($cn);
		}
	    return $cn; 
    }
   ?>
</body>
</html>

