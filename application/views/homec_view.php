<?php plantilla::iniciar(); ?>
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

            <div class="center" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"><img class="img-responsive" src="<?= base_url()?>/img/11-piscina.jpg" alt=""></div>
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
<!--Body Aqui abajo v-->
<br/>
<?php if (isset($mensaje)): ?>
<h4><?= $mensaje; ?></h4>
<?php endif; ?>

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




<!--Body fin -->
