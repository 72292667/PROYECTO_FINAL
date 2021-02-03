<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['id_usu'])) {
    $records = $conn->prepare('SELECT id_usu, email, password FROM usuario WHERE id_usu= :id');
    $records->bindParam(':id', $_SESSION['id_usu']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = $results;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Delyvery Andahuylas</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="estilo/css/style.css">
  </head>
  <body>
    <div class="image-fondo cabecera">
      <br>
      <h1> Por favor Inicie sesión o Registrese</h1>

     <a href="login.php"><h2>Iniciar sesión</h2></a> O
     <a href="signup.php"><h2>Registrarse</h2></a>
     <img src="pagina/img/logo.png" class="img-responsive" style="width:200px" alt="Image"><br><br>

    </div>

       <style>
          .image-fondo {
          background-image: url("pagina/img/fondoindex.jpg");
          background-size: cover;
          color: #AD1C9F;
        }

        .cabecera{
        color: #9B0E1D;
        height: 600px;
        line-height: 50px;
        text-align: center;
        vertical-align: middle;
        }
      </style>
  </body>
</html>
