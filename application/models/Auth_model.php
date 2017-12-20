<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {

  public $variable;

  public function __construct()
  {
    parent::__construct();

  }

  public function authentication($parameter)
  {
     $this -> db -> select('*');
     $this -> db -> from('user');
     $this -> db -> where($parameter);
     $this -> db -> limit(1);

     $query = $this -> db -> get();

     if($query -> num_rows() == 1)
     {
       return $query->result();
     }
     else
     {
       return false;
     }
  }

}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */
