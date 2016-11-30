<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function add_user()
  {
    $this->db->insert('cliente', array(
                      'nombre'=>$this->input->post('nombre',TRUE),
                      'cedula'=>$this->input->post('cedula',TRUE),
                      'usuario'=>$this->input->post('usuario',TRUE),
                      'telefono'=>$this->input->post('telefono',TRUE),
                      'fax'=>$this->input->post('fax',TRUE),
                      'textarea'=>$this->input->post('texarea',TRUE),
                      'correo'=>$this->input->post('correo',TRUE),
                      'contrasena'=>$this->input->post('contransena',TRUE)


              ));
  }

  public function very($variable, $campo)
  {
    $consulta = $this->db->get_where('cliente',array($campo=>$variable));

    if($consulta->num_rows() == 1)
    {

      return true;

    }else{

      return false;
    }
  }


  public function very_sesion()
  {
    $consulta = $this->db->get_where('cliente', array(
                                     'usuario'=>$this->input->post('usuario',TRUE),
                                     'contrasena'=>$this->input->post('contrasena',TRUE)
                                     ));

    if ($consulta->num_rows() == 1)
    {
      return true;

    }else{

      return false;
    }
  }
}
