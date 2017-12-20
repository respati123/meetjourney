<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aktifitas_model extends CI_Model {

    public $table = 'aktifitas';


  public function __construct()
  {
    parent::__construct();

  }

  public function insert($aktifitas){

    $this->db->insert($this->table,$aktifitas);
  }

}

/* End of file ModelName.php */
/* Location: ./application/models/ModelName.php */
