<?php

class Plantilla {

  static $instancia = null;

  static function iniciar(){
    self::$instancia = new plantilla();

  }
  function __construct()
  {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easy Home</title>
    

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
                <a class="navbar-brand" href="<?= base_url();?>Homec">Easy Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?= base_url();?>Homec">Inicio</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Modelos<b class="caret"></b></a>
                        <ul class="dropdown-menu">

                          <li>
                              <a href="#">Casas</a>
                          </li>

                          <li>
                              <a href="#">Apartamentos</a>
                          </li>

                          <li>
                            <a href="#">Villa</a>
                          </li>

                          <li>
                            <a href="#">Cabaña</a>
                          </li>

                          <li>
                              <a href="#">Fincas</a>
                          </li>

                      </ul>
                    </li>

                    <li>
                        <a href="<?=base_url('Homec');?>/anuncio">Publica Anuncio</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Cuenta<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Configurar</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>Homec/salir">Cerrar Seccion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- body inicio-->



    <?php
  }

  function __destruct()
  {
    ?>

    <!--body fin-->
      <footer class="footer-distributed">
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
       interval: 3000 //changes the speed
   })
   </script>

</body>
</html>

    <?php
  }
}
