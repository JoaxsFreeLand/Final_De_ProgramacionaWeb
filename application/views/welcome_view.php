<?php// plantilla::iniciar(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easy Home</title>
    <!-- css de footer-->
    <!-- Latest compiled and minified CSS -->
    <!--  <link rel="stylesheet" href="<?php //echo base_url('plantilla/home');?>/css/demo.css">
    	<link rel="stylesheet" href="<?php//echo base_url('plantilla/home');?>/css/footer-distributed-with-address-and-phones.css">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">


-->

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('plantilla/home');?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url('plantilla/home');?>/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url('plantilla/home');?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url();?>">Easy Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?= base_url();?>">Inicio</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Modelos<b class="caret"></b></a>
                        <ul class="dropdown-menu">

                          <li>
                              <a href="<?= base_url();?>Usuario">Casas</a>
                          </li>

                          <li>
                              <a href="<?= base_url();?>Usuario">Apartamentos</a>
                          </li>

                          <li>
                            <a href="<?= base_url();?>Usuario">Villa</a>
                          </li>

                          <li>
                            <a href="<?= base_url();?>Usuario">Cabaña</a>
                          </li>

                          <li>
                              <a href="<?= base_url();?>Usuario">Fincas</a>
                          </li>

                      </ul>
                    </li>

                    <li>
                        <a href="<?= base_url();?>Usuario">Publica Anuncio</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Cuenta<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?= base_url();?>Usuario">Iniciar Seccion</a>
                            </li>
                            <li>
                                <a href="<?= base_url();?>Usuario/registro">Registrate</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">

                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"><img class="img-responsive" src="<?= base_url()?>/img/11-piscina.jpg" alt=""></div>
                <div class="carousel-caption">
                    <h2><span class="label label-info"> Tu sitio online para encontrar tu hogar!!!</span></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"><img class="img-responsive" src="<?= base_url()?>/img/iStock_000011358529_Medium.jpg" alt=""></div>
                <div class="carousel-caption">
                    <h2><span class="label label-warning">Tu hogar es nuestro criterio</span></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"><img class="img-responsive" src="<?= base_url()?>/img/17.jpg" alt=""></div>
                <div class="carousel-caption">
                    <h2><span class="label label-info">Tenemos villas a la venta.</span></h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<!-- Body inicio -->

<div class="col-lg-12">
  <h2 class="page-header">Publicaciones Actuales</h2>
</div>

<?php

    foreach ($anuncio as $anunci) {
      echo "

      <div class='col'>
        <center><div class='col-md-4 img-portfolio'>
            <a href='#'>
                <img class='img-responsive img-hover' src='http://placehold.it/700x400' alt=''/>
            </a>
            <h3>
              <a href='#'>{$anunci->titulo}</a>
            </h3>
            <p>{$anunci->precio} {$anunci->moneda}</p>
            <p><strong>{$anunci->accion}</strong></p>
            <p>{$anunci->descripcion}</p>

        </div></center>
      </div>

            ";
    }


 ?>


<!-- Body fin -->

  <footer>
       <div class="row">
           <div class="col-lg-12">
              <center><p>Copyright &copy; This Website 2017</p></center>
           </div>
       </div>
   </footer>

   </div>
   <!-- /.container -->

   <!-- jQuery -->
   <script src="<?=base_url('plantilla/home');?>/js/jquery.js"></script>

   <!-- Bootstrap Core JavaScript -->
   <script src="<?=base_url('plantilla/home');?>/js/bootstrap.min.js"></script>

   <!-- Script to Activate the Carousel -->
   <script>
   $('.carousel').carousel({
       interval: 5000 //changes the speed
   })
   </script>

</body>
</html>
