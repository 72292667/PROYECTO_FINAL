<?php
  session_start();
  include ('../database.php');
  $conexion = new mysqli($server, $username, $password, $database);
/* 
	
	$id = $_SESSION['Usuario'];
	$sqlid = "SELECT id_usu FROM usuario WHERE id_usu='".$id."'";
	$resul = mysql_query($sqlid) or die ("Error" .mysql_error());
	$sql = "INSERT INTO cliente VALUES('','".$nombre."','".$apellidos."','".$direccion."','".$celular."','".$resul."')";
  $resultado = mysql_query($sql) or die ("Error" .mysql_error());
  
*/




/* 
  $conexion = new mysqli($server, $username, $password, $database);

    $user = $_SESSION['Usuario'];
    $query = "SELECT id_usu FROM usuario WHERE id_usu = '$user'";
    $result = $conexion->query($query);
    if (!$result) die ("Falló el acceso a la base de datos"); 
    
    $rows = $result->num_rows;

     if (isset($_POST["nombre"]) && isset($_POST["apellidos"]) && isset($_POST["direccion"])&& isset($_POST["celular"])) {
       $nombre = get_post($conexion,'nombre');
       $apellidos = get_post($conexion,"apellidos");
       $direccion = get_post($conexion,"direccion");
       $celular = get_post($conexion,"celular");

       $query = "INSERT INTO cliente  (id_cli, nombre, apellidos, direccion, celular, id_usu) VALUES ('','$nombre', '$apellidos', '$direccion', '$celular', '')";

       $result = $conexion->query($query);
       if ($conexion->connect_error) die ("Fatal error");
       if (!$result) 
       echo "registro falló <br><br>";

      }
 
   function mysql_fix_string($coneccion, $string)
   {
     if (get_magic_quotes_gpc())
        $string = stripcslashes($string);
     return $coneccion->real_escape_string($string);
   }
   function get_post($con, $var)
   {
     return $con->real_escape_string($_POST[$var]);
   }
   */


  $user = $_SESSION['Usuario'];
  $query = "SELECT * FROM usuario WHERE id_usu = '$user'";
  $result = $conexion->query($query);
  if (!$result) die ("Falló el acceso a la base de datos"); 
  
  $rows = $result->num_rows;

      
  if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['direccion']) && !empty($_POST['celular'])) {
    $sql = "INSERT INTO cliente (id_cli, nombre, apellidos, direccion, celular, id_usu ) VALUES (:id_cli, :nombre, :apellidos, :direccion, :celular, null )";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_cli', $_POST['id_cli']);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':apellidos', $_POST['apellidos']);
    $stmt->bindParam(':direccion', $_POST['direccion']);
    $stmt->bindParam(':celular', $_POST['celular']);
  
    if ($stmt->execute()) {
      $message = ' se registro correctamente';
    } else {
      $message = 'Lo sentimos, sus datos no fueron registrados';
    }
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Regístrate</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="estilo/css/style.css">
  </head>
  <body>


    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1> Regístrate</h1>

    <form action="cliente.php" method="POST">
      <input name="nombre" type="text" placeholder="Ingrese su nombre">
      <input name="apellidos" type="text" placeholder="Ingrese su apellidos">
      <input name="direccion" type="text" placeholder="Ingrese su direccion">
      <input name="celular" type="text" placeholder="Ingrese su celular">

      <input type="submit" value="ENVIAR">
    </form>

  </body>
</html>
