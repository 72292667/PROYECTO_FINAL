<?php

  session_start();

  if (isset($_SESSION['id_usu'])) {
    header('Location: pagina/cliente.php');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT email, password FROM usuario WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['id_usu'] = $results['id_usu'];
      header("Location: pagina/header.html");
    } else {
      $message = 'Lo siento, esas credenciales no coinciden';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar sesión</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="estilo/css/style.css">
  </head>
  <body>
      <?php if(!empty($message)): ?>
        <p> <?= $message ?></p>
     <?php endif; ?>

    <div class="image-fondo cabecera">
      <br>
      <h1> Iniciar sesión </h1>
    <span> <a href="signup.php"><h3>REGÍSTRATE</h3></a></span>

    <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="Enter your email">
      <input name="password" type="password" placeholder="Enter your Password">
      <input type="submit" value="ENVIAR">
    </form>  

    </div>

    <style>
            .image-fondo {
              background-image: url("pagina/img/fondo.jpg");
              background-size: cover;
              color: #0A0909;
          }

          .cabecera{
            color: #9B0E1D;
            height: 600px;
            line-height: 50px;
            text-align: center;
            vertical-align: middle;
            text-shadow: #111 0px 0px 10px;
          }
    </style>


   
    
  </body>
</html>
