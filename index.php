<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['id_usu'])) {
    $records = $conn->prepare('SELECT id_usu, email, password FROM usuario WHERE id_usu= :id');
    $records->bindParam(':id', $_SESSION['id_usu']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

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

    <?php if(!empty($user)): ?>
      <br> Biembenido <?= $user['email']; ?>
      <br>Ha iniciado sesión correctamente
      <a href="logut.php">
        Cerrar sesión  
      </a>
    <?php else: ?>
      <h1> Por favor Inicie sesión o Registrese</h1>

      <a href="login.php">Iniciar sesión</a> O
      <a href="signup.php">Registrarse</a>
    <?php endif; ?>
  </body>
</html>
