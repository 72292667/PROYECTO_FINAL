<!DOCTYPE html>
<html>
  <head>
    <title> Delivery Andahuylas </title>
  <!--  trabajamos con un formualrio boostrap-->
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <style>
    /* estilos  */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* la imagen al 100% */
      min-height: 200px;
    }

    /* Ocultar el texto del carrusel cuando la pantalla tiene menos de 600 píxeles de ancho*/
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>
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
      <a class="navbar-brand" href="header.php">Delivery Andahuylas</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="header.php">Menu</a></li>
        <li><a href="promociones.html">Promociones</a></li>
        <li><a href="nosotros.html">Nosotros</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="salir.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
      </ul>
      </div>
    </div>
  </nav>

  <div class="container">
  <div class="row">
    <div class="col-sm-8">
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
      
      <!-- Indicadores -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!--  fotos para diapositivas-->
      <!--  trabajamos con un formualrio boostrap-->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="../pagina/img/hamburguesa.png" alt="Image">
          <div class="carousel-caption">
            <h3> S/. 10.00 </h3>
            <p>Hamburguesa <p>
          </div>      
        </div>

        <div class="item">
          <img src="../pagina/img/pizza.png" alt="Image">
          <div class="carousel-caption">
            <h3>S/. 20.00 </h3>
            <p>pizza</p>
          </div>      
        </div>

        <div class="item">
          <img src="../pagina/img/pollo.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>S/. 40.00</h3>
            <p>Pollo ala Braza</p>
          </div>      
        </div>
        <div class="item">
          <img src="../pagina/img/anticucho.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>S/. 15.00</h3>
            <p>Anticucho Vejetariano</p>
          </div>      
        </div>
        <div class="item">
          <img src="../pagina/img/chaufa.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>S/. 18.00</h3>
            <p>Chaufa de Pollo</p>
          </div>      
        </div>

      </div>
         <!-- Controles izquierdo y derecho -->
         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="well">
      <p>HAMBURGUESAS</p>
    </div>
    <div class="well">
       <p>PIZZA</p>
    </div>
    <div class="well">
       <p>COMIDA CHINA</p>
    </div>
    <div class="well">
       <p>POLLO A LA BRAZA</p>
    </div>
    <div class="well">
       <p>ANTICUCHOS</p>
    </div>
  </div>
</div>
<hr>
</div>

<div class="container text-center">    
  <h1>Menu Hamburguesas</h1>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <img src="../pagina/img/hambur1.jpg" class="img-responsive" style="width:100%" alt="Image">
      <li><a href="../pagina/pedido.php">  <span class="glyphicon glyphicon-log-in"></span> Agregar</a></li>
      <div class="carousel-caption">
            <h3> S/. 10.00 </h3>
            <p>Combo Personal + Gaseosa Personal<p>
      </div>  
    </div>
    <div class="col-sm-3"> 
      <img src="../pagina/img/hambur2.jpg"class="img-responsive" style="width:100%" alt="Image">
      <button type="button" class="btn btn-primary btn-lg">Agregar</button> 
      <div class="carousel-caption">
            <h3> S/. 30.00 </h3>
            <p>Hamburguesa Clásica + Hamburguesa Royal + 3 Papas Fritas<p>
      </div>  
    </div>
    <div class="col-sm-3">
      <img src="../pagina/img/hambur3.jpg" class="img-responsive" style="width:100%" alt="Image">
      <button type="button" class="btn btn-primary btn-lg">Agregar</button>
      <div class="carousel-caption">
            <h3> S/. 20.00 </h3>
            <p>Combo Familiar + 2 Papas Fritas<p>
      </div>  
    </div>
    <div class="col-sm-3">
      <img src="../pagina/img/hambur4.jpg" class="img-responsive" style="width:100%" alt="Image">
      <button type="button" class="btn btn-primary btn-lg">Agregar</button>
      <div class="carousel-caption">
            <h3> S/. 30.00 </h3>
            <p>Combo Personal + solitario <p>
      </div>  
    </div>
  </div>
</div>

<div class="container text-center">    
  <h1>Menu Pizza</h1>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <img src="../pagina/img/pizza1.jpg" class="img-responsive" style="width:100%" alt="Image">
      <li><a href="../pagina/pedido.php"><span class="glyphicon glyphicon-log-in"></span> Agregar</a></li><br><br>
      <div class="carousel-caption"> 
            <h3> S/. 30.00 </h3>
            <p>Combo Personal + solitario <p>
      </div>  
    </div>
    <div class="col-sm-3"> 
      <img src="../pagina/img/pizza2.png"class="img-responsive" style="width:100%" alt="Image">
      <button type="button" class="btn btn-primary btn-lg">Agregar</button>  
      <div class="carousel-caption"> 
            <h3> S/. 30.00 </h3>
            <p>Combo Personal + solitario <p>
      </div>  
    </div>
    <div class="col-sm-3">
      <img src="../pagina/img/pizza3.png" class="img-responsive" style="width:100%" alt="Image">
      <button type="button" class="btn btn-primary btn-lg">Agregar</button>
      <div class="carousel-caption"> 
            <h3> S/. 30.00 </h3>
            <p>Combo Personal + solitario <p>
      </div>  
    </div>
    <div class="col-sm-3">
      <img src="../pagina/img/pizza5.jpg" class="img-responsive" style="width:100%" alt="Image">
      <button type="button" class="btn btn-primary btn-lg">Agregar</button>
      <div class="carousel-caption"> 
            <h3> S/. 30.00 </h3>
            <p>Combo Personal + solitario <p>
      </div>  
    </div>
  </div>
</div>

<div class="container text-center">    
  <h1>Menu Chifa</h1>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <img src="../pagina/img/chifa1.jpg" class="img-responsive" style="width:100%" alt="Image">
      <li><a href="../pagina/pedido.php"><span class="glyphicon glyphicon-log-in"></span> Agregar</a></li>
      <div class="carousel-caption"> 
            <h3> S/. 30.00 </h3>
            <p>Combo Personal + solitario <p>
      </div>  
    </div>
    <div class="col-sm-3"> 
      <img src="../pagina/img/chifa2.jpg"class="img-responsive" style="width:100%" alt="Image">
      <button type="button" class="btn btn-primary btn-lg">Agregar</button>  
      <div class="carousel-caption"> 
            <h3> S/. 30.00 </h3>
            <p>Combo Personal + solitario <p>
      </div>  
    </div>
    <div class="col-sm-3">
      <img src="../pagina/img/chifa3.jpg" class="img-responsive" style="width:100%" alt="Image">
      <button type="button" class="btn btn-primary btn-lg">Agregar</button>
      <div class="carousel-caption"> 
            <h3> S/. 30.00 </h3>
            <p>Combo Personal + solitario <p>
      </div>  
    </div>
    <div class="col-sm-3">
      <img src="../pagina/img/chifa4.png" class="img-responsive" style="width:100%" alt="Image">
      <button type="button" class="btn btn-primary btn-lg">Agregar</button>
      <div class="carousel-caption"> 
            <h3> S/. 30.00 </h3>
            <p>Combo Personal + solitario <p>
      </div>  
    </div>
  </div>
</div>

<footer class="bg-light text-center text-lg-start">

<div class="container p-4">

  <div class="row">
    
    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
      <h5 class="text-uppercase">Delyvery Andahuaylas</h5>
      <p>
          servicios de Delivery Andahuaylas, ofrece todo tipo de comidas, y 
          de la mejor calidad, nuestro servicio es rápido y eficiente, tomando 
          en cuenta los más altos estándares internacionales en cuanto a control 
          de calidad de todos los productos que se ofrece y con el debido protocolo de seguridad.
      </p>
    </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Nuestro Servicio</h5>

                <ul class="list-unstyled mb-0">
                <li>
                <a href="Promociones.html" class="text-dark">Promociones</a>
                </li>
                <li>
                <a href="nosotros.html" class="text-dark">Nosotros</a>
                </li>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
         <h5 class="text-uppercase mb-0">encuentranos en:</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="https://web.facebook.com" class="text-dark">FACEBOOK</a>
                </li>
                <li>
                    <a href="http://deliveryandahuaylas.rf.gd" class="text-dark">PÁGINA WEB</a>
                </li>
                </ul>
      </div>
     </div>
   </div>
   </footer>
  </body>
</html>
<header>
  
</header>



