<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten extends CI_Controller {

	public function __construct(){

		parent:: __construct();
		$this->load->model(array('Artikel_model','home_model'));
	}
	public function index()
	{
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$jumlah_data = $this->Artikel_model->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'konten/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['user'] 	= $this->Artikel_model->data($config['per_page'],$from);
		$data['random'] = $this->home_model->random2();
		$data['terpopuler'] = $this->home_model->populer();
		$this->load->view('user/konten_view',$data);		
	}


}

/* End of file kontent.php */
/* Location: ./application/controllers/kontent.php */