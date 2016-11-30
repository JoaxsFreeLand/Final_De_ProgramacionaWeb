<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homec extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->very_sesion();
    $this->load->model('Homec_model');
  }

  public function index()
  {
    echo "<center><h5><div class='alert alert-info' role='alert'> Hola <strong>". $this->session->userdata('cliente'). " !!!</strong></div></h5></center>";


    $tmb = array();
    $tmb ['anuncio'] =  $this->Homec_model->lista();
    $this->load->view('homec_view', $tmb);

  }

  public function anuncio()
  {
    $this->load->view('anuncio_view');
  }

  public function anuncio_very()
  {
    if ($this->input->post('submit_anuncio'))
    {
        $this->form_validation->set_rules('titulo', 'Titulo','required|trim');
        $this->form_validation->set_rules('ubicacion', 'Ubicacion','required|trim');
        $this->form_validation->set_rules('tipo', 'Tipo','required|trim');
        $this->form_validation->set_rules('precio', 'Precio','required|trim');
        $this->form_validation->set_rules('direccion', 'Direccion','required|trim');

        //Traduccion de la validacion.
        $this->form_validation->set_message('required','<center><h6><div class="alert alert-danger" role="alert"><strong>Oops!!!! Lo sentimos... </strong> El campo " %s " es obligatorio.</div></h6></center>');

        //Agregarlo los datos a la base de datos.
        if ($this->form_validation->run() != FALSE)
        {
          $this->Homec_model->add_anuncio();
          $data = array('mensaje'=>"<center><h3><div class='alert alert-success' role='alert'><strong>En hora buena!</strong> tu anuncio a sido publicado.</div></h3><center>");
          $this->load->view('home_view', $data);
          //$this->load->view('fullAnuncio',$data);
        }else{
          $this->load->view('anuncio_view');
        }
      }else{
        redirect(base_url().'Homec/anuncio');
      }
    }


  //funciones de la session
  public function salir()
  {
    session_destroy();
    redirect(base_url().'Welcome');
  }


  function very_sesion()
  {
    if(!$this->session->userdata('cliente'))
    {
      redirect (base_url().'Usuario');
    }
  }
}
