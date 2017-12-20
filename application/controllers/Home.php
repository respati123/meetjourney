<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('home_model');
   
  }

  public function index()
  {
    $all = $this->home_model->get_all();
    $terpopuler = $this->home_model->populer();
    $terbaru    = $this->home_model->terbaru();
    $random     = $this->home_model->random();

    $data = array(

      'all'   => $all,
      'terpopuler'  => $terpopuler,
      'terbaru'     => $terbaru,
      'random'      => $random

    );

    $this->template->load('templates','user/home',$data);


  }
  public function read()
  { 
  
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $id = $this->uri->segment(3);
    $check = preg_replace('/-/',' ',$id);
    $param = substr($check,0,10);
    $this->home_model->session_view($param);
    $artikel = $this->home_model->read($param);
    $data = array(
      'artikel' => $artikel,
      'url'     => $actual_link,
      'terpopuler' => $this->home_model->populer(),
      'random'  => $this->home_model->random2()
    );
    $this->load->view('user/lihat_artikel',$data);

  }

  
}

/* End of file ControllerName.php */
/* Location: ./application/controllers/ControllerName.php */
