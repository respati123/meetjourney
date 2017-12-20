<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda_model extends CI_Model {

  public $table = 'aktifitas';
  public $id = 'id_aktifitas';
  public $order = 'DESC';

  public function __construct()
  {
    parent::__construct();

  }

  public function get_all_aktifitas(){

    $this->db->order_by($this->id, $this->order);
    return $this->db->get($this->table)->result();
  }

  public function hitung_artikel(){

    return $this->db->get('artikel')->num_rows();
  }

}

/* End of file ModelName.php */
/* Location: ./application/models/ModelName.php */
