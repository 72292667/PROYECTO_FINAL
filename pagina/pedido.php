<?php 
            error_reporting(0);
            session_start();
            require_once '../database.php';
            $conexion = new mysqli($server, $username, $password, $database);
            if ($conexion->connect_error) die ("Fatal error");
            $message = 'estas conectado';

            $user = $_SESSION['usuario'];
            $query = "SELECT * FROM usuario WHERE id_usu = '$user'";
            $result = $conexion->query($query);
            if (!$result) die ("Falló el acceso a la base de datos");

            $rows = $result->num_rows;
            for ($j = 0; $j < $rows; $j++)
            {
                $row = $result->fetch_array(MYSQLI_NUM);

                $r0 = htmlspecialchars($row[0]);
            }

            if(!empty($_POST['direccion']) && !empty($_POST['cantidad']))
            {
                $direccion = mysql_fix_string($conexion, $_POST['direccion']);
                $cantidad = mysql_fix_string($conexion, $_POST['cantidad']);
                $fecha = mysql_fix_string($conexion, $_POST['fecha']);
                


                $query = "INSERT INTO pedidos (id_ped, direccion, cantidad, fecha, id_usu) VALUE ('', '$direccion', '$cantidad', '$fecha', '$r0')";

                $result = $conexion->query($query);
                if ($conexion->connect_error) die ("Fatal error");
                header('location:pedido.php');
                if (!$result) echo "INSERT falló <br><br>";
                echo "registro exitoso"; 
            }
            
            function mysql_fix_string($coneccion, $string)
            {
                if (get_magic_quotes_gpc())
                     $string = stripcslashes($string);
                return $coneccion->real_escape_string($string);
            }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../estilo/css/style.css">
    <title>Delivery Andahuaylas</title>
</head>
<body>

<?php require '../database.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
<?php endif; ?>
<h1> Regístro del Pedido</h1>
	<form method="post" action="pedido.php">
		<form method="post" action="pedido.php" >
		<input name="direccion" type="text" placeholder="Ingrese su dirreción">
		<input name="cantidad" type="number" placeholder="Cantidad a pedir">
		<input name="fecha" type="date" placeholder="Ingrese la fecha">
		<input type="submit" value="Agregar">
		</form>
	</form>

</body>
</html>