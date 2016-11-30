<?php //plantilla::iniciar(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easy Home</title>
      <!-- Bootstrap forms  -->



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
                <a class="navbar-brand" href="<?=base_url();?>">Easy Home </a>
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

    <!-- Body of this page -->
<style>

  #body3 {
    margin: 0 10%  0 10%;
}
</style>

  <center><h2> Registra una cuenta  </h2></center>
</br/>
<div id="body3">
<center><div class="row">
<center><div class="col col-sm-4">

  <form method="post" action="<?=base_url('Usuario')?>/registro_very">
      <h3>Registrate</h3>
      <center><div class="form-group input-group">
        <span class="input-group-addon">Nombre</span>
        <input type="text" class="form-control" name="nombre" required="" data-validation-required-message="Please enter your message"/>
      </div></center>
      <center><div class="form-group input-group">
        <span class="input-group-addon">Cedula</span>
        <input type="text" class="form-control" name="cedula" required="" data-validation-required-message="Please enter your message"/>
      </div></center>
      <center><div class="form-group input-group">
        <span class="input-group-addon">Telefono</span>
        <input type="text" class="form-control" name="telefono" required="" data-validation-required-message="Please enter your message"/>
      </div></center>
      <center><div class="form-group input-group">
        <span class="input-group-addon">Fax</span>
        <input type="text" class="form-control" name="fax" />
      </div></center>
      <center><div class="form-group input-group">
        <span class="input-group-addon">Mas informacion</span>
        <textarea name="textarea" rows="2" cols="5" class="form-control" id="message"  maxlength="999" style="resize:none" aria-invalid="false"></textarea>
      </div></center>
      <center><div class="form-group input-group">
        <span class="input-group-addon">Usuario</span>
        <input type="text" class="form-control" name="usuario"  required="" data-validation-required-message="Please enter your message" />
      </div></center>
      <center><div class="form-group input-group">
        <span class="input-group-addon">Correo</span>
        <input type="email" class="form-control" name="correo" required="" data-validation-required-message="Please enter your message" />
      </div></center>
      <center><div class="form-group input-group">
        <span class="input-group-addon">Contrasena</span>
        <input type="password" class="form-control" name="contransena" required="" data-validation-required-message="Please enter your message"/>
      </div></center>
      <center><div class="form-group input-group">
        <span class="input-group-addon">Confirmar</span>
        <input type="password" class="form-control" name="ccontransena" required="" data-validation-required-message="Please enter your message"/>
      </div></center>
      <div class="text-center">
        <input type="submit" name="submit_registro"  class="btn btn-primary" value="Guardar" />
        <a href="<?=base_url();?>Usuario" class="btn btn-default">Iniciar Seccion</a>
      </div>
  </form>
</div></center>
<br/>
<div class="col-md-6">
<center><?= validation_errors();?></center>
</div>
<br/>
<br/>

      <div class="col-md-6">
        <img class="img-responsive" src="http://placehold.it/700x450" alt="">
      </div>
</div></center>
</div>
    <!-- /.Body -->

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
