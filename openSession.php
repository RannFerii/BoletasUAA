<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuarios</title>
</head>
<body>
<?php
try{
	$base=new PDO("mysql:host=localhost; dbname=calificaciones","root","Genesis10.");
	$base-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * from administrador where usuario=:usuario and pass= :pass";
	$resultado=$base-> prepare ($sql);
	$usuario=htmlentities(addslashes($_POST["usuario"]));
	$pass=htmlentities(addslashes($_POST["pass"]));
	$resultado->bindValue(":usuario",$usuario);
	$resultado->bindValue(":pass",$pass);
	$resultado->execute();
	$registro=$resultado->rowCount();
	if($registro!=0){
		session_start();
		$_SESSION["usuario"]=$_POST["usuario"];
		header("location:index.php");
	}else{
		header("location:login.php");

	}
}catch(Exception $e)
{
	die("Error: " . $e->getMessage());
}
?>
</body>
</html>