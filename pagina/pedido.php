<?php
	session_start();
	require_once '../database.php' 
	$conexion = new mysqli($server, $username, $password, $database);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../estilo/css/style.css">
    <title>Delivery Andahuaylas</title>
</head>
<body>
        <form action="#" class="registro" id="registro" name="registro" method="POST">
		<div class="contenedor">
        <article id="main-col">
        <h1>Pedidos</h1>
        <form action="#"> 
		<label for="dirreccion">Dirección</label>
        <input type="text"  name="código" placeholder="Dirección">
		<br>
		<label for="cantidad">Cantidad </label>
		<input type="number" name="cantidad" placeholder="Cantidad">
		<br>
		<label for="fecha">Fecha</label>
        <input type="date" name="fecha" placeholder="Fecha">
		<input type="submit" class="btn" name="registro" value="Registrar">
	</form>
	</article>
	</div>
</body>
</html>
<?php
    if(isset($_POST['registro']))
    {
		$dirreccion =$_POST["dirreccion"];
		$cantidad =$_POST["cantidad"];
		$fecha=$_POST["fecha"];

		$insertarDatos = "INSERT INTO pedidos VALUES('', '$dirreccion', '$cantidad', '$fecha', '')"

		$ejecutarInsertar = mysqli_query($conexion, $insertarDatos);
    

		if(!$ejecutarInsertar){
            echo"Error En la linea de sql";
            
		}
	}
?>

</body>
</html>