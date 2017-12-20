<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('beranda_model','Aktifitas_model','Auth_model'));
    $this->load->helper('fungsidate_helper');
    if($this->session->userdata('isLogin')!=TRUE){
      redirect('login');
    }
  }

  public function index()
  {
    $beranda = $this->beranda_model->get_all_aktifitas();
    $hitung =  $this->beranda_model->hitung_artikel();
    
    $data = array (
      'hitung_artikel' => $hitung,
      'aktifitas'      => $beranda,
    );
    
    $this->template->load('dashboard','beranda',$data);
  }
  public function login($parameter = '')
  {
    if($this->session->userdata('isLogin')==TRUE){
      redirect('artikel');
    }
    $data['alert'] = $parameter;
    $this->load->view('login',$data);
  }

  public function Auth()
  {
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));

    $data = array(

      'username' => $username,
      'password' => $password
    );

    $model_auth = $this->Auth_model->authentication($data);
    if($model_auth)
    {
        $sess_array = array();
        foreach ($model_auth as $q) {
          $sess_array['isLogin'] = TRUE;
          $sess_array['id_user'] = $q->id_user;
          $sess_array['username'] = $q->username;
          $sess_array['nama_user'] = $q->nama_user;
          $sess_array['level'] = $q->level;
          $sess_array['foto'] = $q->foto;

        }
        $this->session->set_userdata($sess_array);
        redirect('Artikel');
    } else {

      $data = 'Username & Password in Correct';
      $this->index($data);

    }
  }

  public function logout()
  {
    session_destroy('logged_in');
    redirect('login');
  }

}

/* End of file ControllerName.php */
/* Location: ./application/controllers/ControllerName.php */
