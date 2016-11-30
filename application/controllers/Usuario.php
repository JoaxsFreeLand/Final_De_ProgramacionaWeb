<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('Usuario_model');
  }

  public function index()
  {
    $this->load->view("login_view");
  }

  public function registro()
  {
    $this->load->view("registro_view");
  }
  public function registro_very()
  {
    if ($this->input->post('submit_registro'))
    {
      $this->form_validation->set_rules('nombre', 'Nombre','required|trim');
      $this->form_validation->set_rules('cedula', 'Cedula','required|trim');
      $this->form_validation->set_rules('telefono', 'Telefono','required|trim');
      $this->form_validation->set_rules('usuario', 'Usuario','required|trim|callback_very_user'); //  |callback_very_user
      $this->form_validation->set_rules('correo', 'Correo','required|trim|valid_email|callback_very_mail'); //  |callback_very_mail
      $this->form_validation->set_rules('contransena', 'Contrasena','required|trim|min_length[8]');
      $this->form_validation->set_rules('ccontransena', 'Confirmar Contrasena','required|trim|matches[contransena]');

      //Traduccion de la validacion.
      $this->form_validation->set_message('required','<center><h6><div class="alert alert-danger" role="alert"><strong>Oops!!!! Lo sentimos... </strong> El campo " %s " es obligatorio.</div></h6></center>');
      $this->form_validation->set_message('valid_email','<center><h6><div class="alert alert-danger" role="alert"><strong>Oops!!!! Lo sentimos... </strong> Ingrese un correo valido.</div></h6></center>');
      $this->form_validation->set_message('min_length','<center><h6><div class="alert alert-danger" role="alert"><strong>Oops!!!! Lo sentimos... </strong> La contrasena como minimo de tener 8 caracteres.</div></h6></center>');
      $this->form_validation->set_message('matches','<center><h6><div class="alert alert-danger" role="alert"><strong>Oops!!!! Lo sentimos... </strong> Las contrasena son distintas.</div></h6></center>');



      //Agregarlo los datos a la base de datos.
      if ($this->form_validation->run() != FALSE)
      {
        $this->Usuario_model->add_user();
        $data = array('mensaje'=>"<center><h3><div class='alert alert-success' role='alert'><strong>En hora buena!</strong> el usario se registro correctamente.</div></h3><center>");
        $this->load->view('login_view', $data);
      }else{
        $this->load->view('registro_view');
      }
    }else{
      redirect(base_url().'Usuario/registro');
    }
  }

  public function very_user($user)
  {
    $variable = $this->Usuario_model->very($user,'usuario');
    if ($variable == true)
    {

      return false;

    }else{

      return true;

    }
  }

  public function very_mail($mail)
  {

    $variable = $this->Usuario_model->very($mail,'correo');
    if ($variable == true)
    {

      return false;

    }else{

      return true;

    }
  }

  public function very_sesion()
  {

    if ($this->input->post('submit_seccion'))
    {
      $variable= $this->Usuario_model->very_sesion();

      if ($variable == true)
      {

        $variables = array('cliente' => $this->input->post('usuario'));
        $this->session->set_userdata($variables);
        redirect(base_url().'Homec');

      }else{

        $data = array('mensaje'=>"<center><h3><div class='alert alert-danger' role='alert'><strong>Oops!!!! Lo sentimos...</strong> El usuario y/o contrasena son incorrectos.</div></h3><center>");
        $this->load->view('login_view', $data);

      }

    }else{

        redirect(base_url().'Usuario');

      }
    }

    

  }
