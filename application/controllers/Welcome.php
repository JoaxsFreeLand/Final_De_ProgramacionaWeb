<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Homec_model');
  }

  public function index()
  {
    $tmb = array();
    $tmb ['anuncio'] =  $this->Homec_model->lista();
    $this->load->view('welcome_view', $tmb);

  }
}
