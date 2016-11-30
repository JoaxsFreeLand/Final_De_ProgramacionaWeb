<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class S_admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Sys_admin_model');
  }

  public function index()
  {

    //Usuario
    $tom = array();
    $tom ['cliente'] = $this->Sys_admin_model->listar_usuario();
    $this->load->view('s_adminCliente_view', $tom);
    //Anuncio


    $tmb = array();
    $tmb ['anuncio'] = $this->Sys_admin_model->listar_anuncio();
    $this->load->view('s_admin_view', $tmb);
    ;

  }
  public function delete()
  {
		$id= (isset($_GET['id']))?$_GET['id']+0 : 0;
		$this->Sys_admin_model->eliminarAnuncio($id);
		redirect('S_admin','refresh');
	}
  public function deletet()
  {
		$id= (isset($_GET['id']))?$_GET['id']+0 : 0;
		$this->Sys_admin_model->eliminarCliente($id);
		redirect('S_admin','refresh');
	}

  public function salir_admin()
  {
    session_destroy();
    redirect(base_url().'Welcome');
  }


}
