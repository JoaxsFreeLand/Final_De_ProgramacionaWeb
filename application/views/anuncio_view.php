<?php plantilla::iniciar(); ?>
<style>
  #body3 {
    margin: 0 10%  0 10%;
  }
</style>
  <center><h2> Publica tu anuncio</h2></center>
</br/>
<div id="body3">
<center><div class="row">
<center><div class="col col-sm-4">
  <form method="post" action="<?=base_url();?>Homec/anuncio_very">
      <h4><span class="label label-default">Completa y publica... asi de facil.!!!</span></h4>
      <br/>
      <center><div class="form-group input-group">
        <span class="input-group-addon">Titulo</span>
        <input type="text" class="form-control" name="titulo" required="" data-validation-required-message="Please enter your message"/>
      </div></center>
      <center><div class="form-group input-group">
        <span class="input-group-addon">Ubicacion</span>
        <input type="text" class="form-control" name="ubicacion" required="" data-validation-required-message="Please enter your message"/>
      </div></center>
      <center><div class="form-group input-group">
        <span class="input-group-addon">Propietario</span>
        <input type="text" class="form-control" name="direccion" required="" data-validation-required-message="Please enter your message"/>
      </div></center>
      <center><div class="form-group input-group">
        <span class="input-group-addon">Tipo</span>
        <select name="tipo" class="form-control">

            <option value="Casa" class="">Casa</option>
						<option value="Apartamentos" class="">Apartamentos</option>
						<option value="Villa" class="">Villa</option>
            <option value="Cabana" class="">Cabana</option>
            <option value="Fincas" class="">Fincas</option>
					</select>
      </div></center>
      <center><div class="form-group input-group">
        <span class="input-group-addon">Precio</span>
        <input type="text" class="form-control" name="precio" required="" data-validation-required-message="Please enter your message" />
      </div></center>
      <center><div class="form-group input-group">
        <span class="input-group-addon">Moneda</span>
        <select name="moneda" class="form-control">
            <option value="EURO." class="">EURO.</option>
            <option value="EE.UU" class="">EE.UU</option>
            <option value="RD." class="">RD.</option>
          </select>
      </div></center>
      <center><div class="form-group input-group">
        <span class="input-group-addon">Accion</span>
        <select name="accion" class="form-control">
            <option value="Vender" class="">Vender</option>
            <option value="Alquilar" class="">Alquilar</option>
          </select>
      </div></center>
      <center><div class="form-group input-group">
        <span class="input-group-addon">Descripcion</span>
        <textarea name="descripcion" rows="2" cols="5" class="form-control" id="message"  maxlength="500" style="resize:none" aria-invalid="false" required="" data-validation-required-message="Please enter your message"></textarea>
      </div></center>
      <div class="text-center">
        <input type="submit" name="submit_anuncio"  class="btn btn-primary" value="Guardar" />
        <a href="<?=base_url();?>Homec" class="btn btn-default">Volver</a>
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
