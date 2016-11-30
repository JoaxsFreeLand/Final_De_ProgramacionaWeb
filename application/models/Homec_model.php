<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homec_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function lista()
  {
    $query = $this->db->get('anuncio');
    return $query->result();
  }

  public function add_anuncio()
  {
    $this->db->insert('anuncio', array(
                      'titulo'=>$this->input->post('titulo',TRUE),
                      'ubicacion'=>$this->input->post('ubicacion',TRUE),
                      'direccion'=>$this->input->post('direccion',TRUE),
                      'tipo'=>$this->input->post('tipo',TRUE),
                      'precio'=>$this->input->post('precio',TRUE),
                      'moneda'=>$this->input->post('moneda',TRUE),
                      'accion'=>$this->input->post('accion',TRUE),
                      'descripcion'=>$this->input->post('descripcion',TRUE)

                      ));
  }
}
