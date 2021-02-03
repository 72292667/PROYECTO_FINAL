<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuario (id_usu, nombres, email, password ) VALUES (:id_usu, :nombres,  :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_usu', $_POST['id_usu']);
    $stmt->bindParam(':nombres', $_POST['nombres']);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = ' Nuevo usuario creado con éxito';
      header("Location: pagina/cliente.php");
    } else {
      $message = 'Lo sentimos, debe haber un problema al crear su cuenta';
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

    <form action="signup.php" method="POST">
      <input name="nombres" type="text" placeholder="Ingrese su nombre">
      <input name="email" type="text" placeholder="Ingrese su  email">
      <input name="password" type="password" placeholder="Ingrese su  Password">
      <input name="confirm_password" type="password" placeholder="Confirme Password">
      <input type="submit" value="ENVIAR">
    </form>

  </body>
</html>
