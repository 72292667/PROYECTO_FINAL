<?php
  session_start();
  include ('../database.php');
  $conexion = new mysqli($server, $username, $password, $database);


     
  if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['direccion']) && !empty($_POST['celular'])) {
    $sql = "INSERT INTO cliente (id_cli, nombre, apellidos, direccion, celular, id_usu ) VALUES (:id_cli, :nombre, :apellidos, :direccion, :celular, null)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_cli', $_POST['id_cli']);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':apellidos', $_POST['apellidos']);
    $stmt->bindParam(':direccion', $_POST['direccion']);
    $stmt->bindParam(':celular', $_POST['celular']);
  
    if ($stmt->execute()) {
           
      $message = 'se registro correctamente';
      header("Location: ../pagina/header.html");
    } else {
      $message = 'Lo sentimos, sus datos no fueron registrados';
    }
  }

?>
<!DOCTYPE html>
<html>

  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

  
  <body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Delivery Andahuylas</a>
    </div>
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="salir.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
      </ul>
      </div>
    </div>
  </nav>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <div class="image-fondo cabecera">
      <br>
     <h1> CONFIRMA TU DIRRECCIÓN DE ENTREGA</h1><br>

     <form action="cliente.php" method="POST">
      <input name="nombre" type="text" placeholder="Ingrese su Nombre">
      <input name="apellidos" type="text" placeholder="Ingrese su Apellidos">
      <input name="direccion" type="text" placeholder="Ingrese su Dirección">
      <input name="celular" type="text" placeholder="Número Celular">

      <input type="submit" value="CONFIRMAR" type="color">
     </form><br>   

    </div>

    <style>
            .image-fondo {
              background-image: url("../pagina/img/fondo.jpg");
              background-size: cover;
              color: #0A0909;
          }

          .cabecera{
            color: #9B0E1D;
            height: 400px;
            line-height: 50px;
            text-align: center;
            vertical-align: middle;
            text-shadow: #111 0px 0px 10px;
          }

          .bg-light{
            color: #0D9B19;  
            vertical-align: middle;
            text-shadow: #111 0px 0px 10px;        
          }
    </style> <br>

    
 
    <footer class="bg-light text-center text-lg-start">

        <div class="container p-4">

          <div class="row">
        
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h3 class="text-uppercase">Delyvery Andahuaylas</h3>
              <p>
                  Servicios de Delivery Thomy, ofrece todo tipo de comidas, y 
                  de la mejor calidad, nuestro servicio es rápido y eficiente, tomando 
                  en cuenta los más altos estándares internacionales en cuanto a control 
                  de calidad de todos los productos que se ofrece y con el debido
                  protocolo de seguridad.
              </p>
            </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
         <h4 class="text-uppercase mb-0">Encuentranos en:</h4>

                <ul class="list-unstyled">
                <li>
                    <a href="https://web.facebook.com" class="text-dark">FACEBOOK</a>
                </li>
                <li>
                    <a href="http://deliveryandahuaylas.rf.gd" class="text-dark">PÁGINA WEB</a>
                </li>
                </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
         <h4 class="text-uppercase mb-0">DELIVERY </h4>

                <ul class="list-unstyled">
                <li>
                <img src="../pagina/img/logo.png" class="img-responsive" style="width:100px" alt="Image"><br><br>
                </li>
                
                </ul>
      </div>
     </div>
   </div>
   </footer>

  </body>
</html>
