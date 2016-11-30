<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sys_admin_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

  public function listar_usuario()
  {
    $query = $this->db->get('cliente');
    return $query->result();
  }

  public function listar_anuncio()
  {
    $query = $this->db->get('anuncio');
    return $query->result();
  }

  public function eliminarAnuncio($id){
  	$this->db->where('id_anuncio=',$id);
  	$this->db->delete('anuncio');

  }
  public function eliminarCliente($id){
    $this->db->where('id_cliente=',$id);
    $this->db->delete('cliente');

  }
}
