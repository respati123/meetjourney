<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
  {

    parent::__construct();
    $this->load->model('Auth_model');


  }

  public function index($parameter = '')
  {
    if($this->session->userdata('isLogin')==TRUE){
      redirect('Admin');
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
          $_SESSION['sess_kcfinder'] = array();
          $_SESSION['sess_kcfinder']['disabled'] = False;

          $_SESSION['sess_kcfinder']['uploadURL'] = "../content_upload";
        

        }
        $this->session->set_userdata($sess_array);
        redirect('Admin');
    } else {

      $data = 'Username & Password in Correct';
      $this->index($data);

    }
  }

  public function logout()
  {
    session_destroy();
    redirect('login');
  }
}

/* End of file At.php */
/* Location: ./application/controllers/At.php */
